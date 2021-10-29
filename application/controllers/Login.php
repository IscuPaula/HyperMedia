<?php 
class Login extends CI_CONTROLLER
{
    public function index()
    {

         $this->load->view('login_view');
         $this->load->model('User_model');

         if($this->User_model->verify_user()===TRUE)
         {
             
            echo ('validare corecta');
            redirect('home','refresh');
         }
         else{
             echo('validare incorecta');
         }
  
         
    }
}
?>