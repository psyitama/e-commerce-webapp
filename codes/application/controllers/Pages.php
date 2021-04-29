<?php

class Pages extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/index');
        $this->load->view('templates/footer');
    }

    public function signup()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/signup');
        $this->load->view('templates/footer');
    }

}
