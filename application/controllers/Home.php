<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_CONTROLLER
{
    public function index()
    {
        $this->load->view('home_view');
    }
}