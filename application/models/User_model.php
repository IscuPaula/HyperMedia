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
    function verify_user($data)
    {
        if(sizeof($data) > 0)
        {
            //logat succes
            return true;
     
        }else
        {
            //login fail, retry
            return false;
        }
    }
}
?>