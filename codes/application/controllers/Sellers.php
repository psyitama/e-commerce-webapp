<?php
class Sellers extends CI_Controller
{
    public function index()
    {
        //check if user is signed-in
        if ($this->session->userdata('is_logged_in') != true) {
            redirect(base_url());
        }

        $data = array(
            'total_products' => count($this->customer->get_all_products()),
            'pending_processes' => count($this->seller->get_all_orders()),
            'total_customers' => count($this->customer->get_all_customers()),
        );

        $this->load->view('templates/header');
        $this->load->view('sellers/dashboard', $data);
        $this->load->view('templates/footer');
    }

    public function order_partial()
    {
        $data = array(
            'orders' => $this->seller->get_all_orders(),
            'order_statuses' => $this->seller->get_order_statuses(),
        );

        $this->load->view('partials/orders', $data);
    }

    //partial for all products
    public function products_partial()
    {
        $data['products'] = $this->seller->get_all_products();
        $this->load->view('partials/products_seller', $data);
    }

    //partial for all orders
    public function orders()
    {
        //check if user is signed-in
        if ($this->session->userdata('is_logged_in') != true) {
            redirect(base_url());
        }

        $data['total_orders'] = $this->seller->get_all_orders();

        $this->load->view('templates/header');
        $this->load->view('sellers/orders', $data);
        $this->load->view('templates/footer');
    }

    //partial for product categories
    public function prod_categories_partial()
    {
        $data['categories'] = $this->seller->get_product_categories();
        $this->load->view('partials/product_categories', $data);
    }

    //product page view
    public function products()
    {
        //check if user is signed-in
        if ($this->session->userdata('is_logged_in') != true) {
            redirect(base_url());
        }

        $this->load->view('templates/header');
        $this->load->view('sellers/products');
        $this->load->view('templates/footer');
    }

    //add product process
    public function add_product()
    {
        $upload = $this->seller->do_upload();
        $product = array(
            'product' => $this->input->post('product'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price'),
            'categories' => $this->input->post('categories'),
            'inventory_count' => $this->input->post('inventory_count'),
            'image' => $upload,
        );
        $result = $this->seller->validate_product($product);
        if ($result == 'valid') {
            //okay
            $this->seller->add_product($product);
            $data['products'] = $this->seller->get_all_products();
            $this->load->view('partials/products_seller', $data);
        } else {
            $data['products'] = $this->seller->get_all_products();
            $this->load->view('partials/products_seller', $data);
        }
    }

    //delete product process
    public function delete_product()
    {
        $product_id = $this->input->post();
        $this->seller->delete_product($product_id);

        $data['products'] = $this->seller->get_all_products();
        $this->load->view('partials/products_seller', $data);
    }

    //view transaction by target id
    public function view_transaction($transaction_id)
    {
        //check if user is signed-in
        if ($this->session->userdata('is_logged_in') != true) {
            redirect(base_url());
        }

        $data = array(
            'order' => $this->seller->view_single_order($transaction_id),
            'ordered_items' => $this->seller->get_ordered_items($transaction_id),
            'status' => $this->seller->get_order_status($transaction_id),
        );
        $this->load->view('templates/header');
        $this->load->view('sellers/show', $data);
        $this->load->view('templates/footer');
    }
}
