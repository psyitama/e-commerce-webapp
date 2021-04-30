<?php
class Customers extends CI_Controller
{
    public function index()
    {
        $data = array(
            'categories' => $this->customer->get_categories(),
        );

        $this->load->view('templates/header');
        $this->load->view('customers/index', $data);
        $this->load->view('templates/footer');
    }
}
