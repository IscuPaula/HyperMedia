<?php

class Logout extends CI_Controller
{
        
        public function index()

        {
                $_SESSION['username'] = "";
                $_SESSION['isLogged'] = false;
                redirect('register');
                
                
        }

}

?>