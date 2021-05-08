<?php
class Customers extends CI_Controller
{
    public function index()
    {
        //check if user is signed-in
        if ($this->session->userdata('is_logged_in') != true) {
            redirect(base_url());
        }

        $data = array(
            'total_products' => count($this->customer->get_all_products()),
            'products' => $this->customer->get_all_products(),
            'categories' => $this->customer->get_categories(),
        );

        $this->load->view('templates/header');
        $this->load->view('customers/index', $data);
        $this->load->view('templates/footer');
    }

    public function show($product_id)
    {
        //check if user is signed-in
        if ($this->session->userdata('is_logged_in') != true) {
            redirect(base_url());
        }

        $related_id = $this->customer->get_single_product($product_id);

        $data = array(
            'product' => $this->customer->get_single_product($product_id),
            'categories' => $this->customer->get_categories(),
            'related_products' => $this->customer->get_related_items($related_id['category_id'], $product_id),
        );

        $this->load->view('templates/header');
        $this->load->view('customers/show', $data);
        $this->load->view('templates/footer');
    }

    public function products_pagination($category, $page)
    {
        //check if user is signed-in
        if ($this->session->userdata('is_logged_in') != true) {
            redirect(base_url());
        }

        $data = array(
            'total_products' => count($this->customer->get_products_by_categories($category)),
            'products' => $this->customer->get_paginated_products($category, $page),
            'categories' => $this->customer->get_categories(),
            'active_category' => $this->customer->get_single_categories($category),
            'current_category' => $category,
            'current_page' => $page,
        );

        $this->load->view('templates/header');
        $this->load->view('customers/products', $data);
        $this->load->view('templates/footer');
    }

    public function carts()
    {
        $this->load->view('templates/header');
        $this->load->view('customers/carts');
        $this->load->view('templates/footer');
    }

    public function add_item()
    {
        var_dump($this->input->post());
        $item = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'qty' => $this->input->post('qty'),
            'price' => $this->input->post('price'),
            'image' => $this->input->post('image'),
        );

        $this->cart->insert($item);

        redirect('customers/carts');
    }
}
