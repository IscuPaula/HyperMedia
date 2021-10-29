<?php 
class Register extends CI_CONTROLLER
{
    public function index()
    {        
        //setting validation rules
        //$this->form_validation->set_rules('fname', 'FirstName', 'required');
        //$this->form_validation->set_rules('lname', 'LastName', 'required');
        //$this->form_validation->set_rules('uname', 'UserName', 'required');
        //$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        //$this->form_validation->set_rules('password', 'Password', 'required');

        //if return false the register page loads
        //if($this->form_validation->run()==FALSE) 
        //{  
            
        //}
        //if return true details will be saved in db
        // else
        //{      
          //  $this->load->model('User_model');
          //  $this->User_model->insert_user();
          //  redirect('login','refresh');
        //}
        
        $this->load->view('register_view');
        $this->load->model('User_model');

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        //insert into db(user)
        $data=array
        (   
            'fname'=> $fname,
            'lname'=> $lname,
            'username'=> $username,
            'email' => $email,
            'password' => $password,

        );
        
        if(!empty($fname))
        {
            echo('succes');
            $this->User_model->insert_user($data);
            redirect('login','refresh');
        }
        else 
        {
            //echo('your details');
            return true;

        }
    }
}

?>