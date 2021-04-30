<?php
class Sellers extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('sellers/index');
        $this->load->view('templates/footer');
    }
}
