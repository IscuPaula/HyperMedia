<?php
class User_model extends CI_MODEL
{

    function insert_users()
    {
        $data=array
        (
        
            'FirstName'=>$fname,
            'LastName'=>$lname,
            'Username'=>$uname,
            'Email'=>$email,
            'Password'=>$password,
            
        ); 
        $this->db->insert($data);
    }
}
?>