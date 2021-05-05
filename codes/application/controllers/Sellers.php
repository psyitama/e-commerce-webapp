<?php
class Sellers extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('sellers/index');
        $this->load->view('templates/footer');
    }

    public function products()
    {
        $this->load->view('templates/header');
        $this->load->view('sellers/products');
        $this->load->view('templates/footer');
    }

    public function products_partial()
    {
        $data['products'] = $this->seller->get_all_products();
        $this->load->view('partials/products_seller', $data);
    }

    public function prod_categories_partial()
    {
        $data['categories'] = $this->seller->get_product_categories();
        $this->load->view('partials/product_categories', $data);
    }

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
        var_dump($product);
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

    public function delete_product()
    {
        $product_id = $this->input->post();
        $this->seller->delete_product($product_id);

        $data['products'] = $this->seller->get_all_products();
        $this->load->view('partials/products_seller', $data);
    }
}
