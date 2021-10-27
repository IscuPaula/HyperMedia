<?php 
class Register extends CI_CONTROLLER
{

    public function index()
    {        
        //setting validation rules
        $this->form_validation->set_rules('fname', 'FirstName', 'required');
        $this->form_validation->set_rules('lname', 'LastName', 'required');
        $this->form_validation->set_rules('uname', 'UserName', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        //if return false the register page loads
        if($this->form_validation->run()==FALSE) 
        {  
            $this->load->view('register_view');
        }
        //if return true details will be saved in db
        else
        {      
            $this->load->model('User_model');
            $this->Register_model->insert_users();
            redirect('login','refresh');
        }
    }
}

?>