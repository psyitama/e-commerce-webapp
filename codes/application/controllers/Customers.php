<?php
defined('BASEPATH') or exit('No direct script access allowed');

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

    //partial for cart's quantity
    public function cart_qty_partial()
    {
        $this->load->view('partials/cart_qty');
    }

    //show product by target id
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

    //products pagination by their category and page number
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

    //cart and checkout page view
    public function carts()
    {
        $data = array(
            'user' => $this->customer->get_customer_by_email($this->session->userdata('email')),
        );

        $this->load->view('templates/header');
        $this->load->view('customers/carts', $data);
        $this->load->view('templates/footer');
    }

    //process for add item/add to cart
    public function add_item()
    {
        $item = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'qty' => $this->input->post('qty'),
            'price' => $this->input->post('price'),
            'image' => $this->input->post('image'),
        );

        $this->cart->insert($item);

        $this->load->view('partials/cart_qty');
    }

    //process for cart checkout
    public function checkout()
    {
        // var_dump($this->input->post());
        $id = $this->customer->pay_orders();
        $this->customer->insert_ordered_items($id, $this->cart->contents());
        $this->cart->destroy();
        redirect(base_url() . 'customers/index');
    }

}
