<?php 
class Register extends CI_CONTROLLER

{   
    
    public function index()
    {
        $this->form_validation->set_rules('fname','FirstName','required');
        $this->form_validation->set_rules('lname','LastName','required');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('email','Email','required');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('register_view');
        }
        else
        {
            $this->load->model('User_model');
            $this->User_model->insert_users();
            redirect('login_view');
        }


    }
}
?>