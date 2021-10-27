<?php
class User_model extends CI_MODEL
{
    function insert_user()
    {
        //accesing data with post method

        $fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
        $uname = $this->input->post('uname');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        //insert into db(user)
        $data=array
        (   
            'fname'=> $fname,
            'lname'=> $lname,
            'username'=> $uname,
            'email' => $email,
            'password' => $password,

        );
            $this->insert->db('user',$data);

    }

}
?>