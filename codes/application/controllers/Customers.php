<?php
class Customers extends CI_Controller
{
    public function index()
    {
        $data = array(
            'products' => $this->customer->get_all_products(),
            'categories' => $this->customer->get_categories(),
        );

        $this->load->view('templates/header');
        $this->load->view('customers/index', $data);
        $this->load->view('templates/footer');
    }
}
