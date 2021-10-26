<?php
class User_model extends CI_MODEL
{
    function insert_users()
    {
        
        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $uname = $this->input->post('uname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
     
        $data=array
        (
            'FirstName'=> $fname,
            'LastName'=> $lname,
            'Username'=> $uname,
            'Email' => $email,
            'Password' => $password,
            
        );
        
        $this->db->insert('user',$data);
    }

}
?>