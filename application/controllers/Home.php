<?php


class Home extends CI_CONTROLLER
{
    public function index()
    {
        //$this->load->helper('url');
        $this->load->view('home_view');
    }
}
?>