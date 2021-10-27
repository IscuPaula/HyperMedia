<?php 
class Login extends CI_CONTROLLER
{
    public function index()
    {
        $this->form_validation->set_rules('uname', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
    
    if($this->form_validation->run()==FALSE) 
    {
            $this->load->view('login_view');
    }
    else
    {
        $this->load->model('User_model');
        if($this->User_model->verify_login())
        {
            $this->session->set_userdata('username',$this->input->post('uname'));
            $this->session->set_userdata('isLogged',true);

        }
    }
}
}