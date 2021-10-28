<?php 
class Login extends CI_CONTROLLER
{
    public function index()
    {

        $this->load->view('login_view');
        $this->load->model('User_model');
  
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        //insert into db(user)
        $data=array
        (   
            'username'=> $username,
            'password' => $password
        );
        print_r($data);
       
         if(!empty($username))
         {
            
             $this->User_model->verify_user($data);
             redirect('home','refresh');
            // return true;
     
         }else
        {
           echo('not working');
           // return false;
         }
    }
}
?>