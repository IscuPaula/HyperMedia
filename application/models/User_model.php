<?php
class User_model extends CI_MODEL
{
    function insert_user($data)
    {

        //accesing data with post method
        $this->db->insert('user',$data);
        //echo $this->db->last_query();
        //echo $this->db->_error_message();
        if($data)
        {   
            return true;
        }
        else
        {
            return false;
        }

    }
    function verify_user()
    {
        
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $data=array
        (
            'Username'=> $username,
            'Password'=> $password
        );
        
        $query = $this->db->get_where('user', $data)->result();
        $this->db->get('user',$data);
        

        if(sizeof($query) >0)
        {
            return true;
            print_r($query);
     
        }else
        {
            return false;
        }
    }
}
?>