<?php
class User_model extends CI_MODEL
{
    function insert_users()
    {
        
        $data=[
        
            'FirstName'=> $fname,
            'LastName'=> $lname,
            'Username'=> $uname,
            'Email' => $email,
            'Password' => $password,
            
        ];
        $db->table('user')->insert($data);
    }

}