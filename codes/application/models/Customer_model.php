<?php
class Customer_model extends CI_Model
{

    public function get_customer_by_email($email)
    {
        return $this->db->query("SELECT * FROM users WHERE email=?", $email)->row_array();
    }

    public function get_all_customers()
    {
        return $this->db->query("SELECT * FROM users WHERE user_level=0")->result_array();
    }

    public function get_all_products()
    {
        return $this->db->query("SELECT * FROM products")->result_array();
    }

    public function get_single_product($product_id)
    {
        return $this->db->query("SELECT * FROM products WHERE id=?", $product_id)->row_array();
    }

    public function get_categories()
    {
        return $this->db->query("SELECT * FROM categories")->result_array();
    }

    public function get_single_categories($category_id)
    {
        return $this->db->query("SELECT * FROM categories WHERE id=?", $category_id)->row_array();
    }

    public function get_products_by_categories($category_id)
    {
        return $this->db->query("SELECT * FROM products WHERE category_id=?", $category_id)->result_array();
    }

    public function get_related_items($category_id, $product_id)
    {
        return $this->db->query("SELECT * FROM products WHERE category_id=? AND id!=$product_id ORDER BY sold_count DESC LIMIT 8", $category_id, $product_id)
            ->result_array();
    }

    /*
    Query to paginate products
     */
    public function get_paginated_products($category_id, $page)
    {

        // $page = $page * 8;
        $page = ($page - 1) * 8;

        $query = "SELECT * FROM products WHERE category_id=? LIMIT ?,8";
        $values = array($category_id, $page);
        return $this->db->query($query, $values)->result_array();
    }

    public function insert_ordered_items($transaction_id, $items)
    {
        foreach ($items as $item):
            $query = "INSERT into orders (transaction_id, user_id, product_id, qty, created_at) VALUES (?,?,?,?, NOW())";
            $values = array($transaction_id, $this->session->userdata('user_id'), $item['id'], $item['qty']);
            $this->db->query($query, $values);
        endforeach;
        return;
    }

    public function pay_orders()
    {
        date_default_timezone_set('Asia/Manila');

        $order_details = array(
            'status_id' => 1,
            'user_id' => $this->session->userdata('user_id'),
            'total_price' => $this->input->post('total_price'),
            's_address' => $this->input->post('s_address'),
            's_city' => $this->input->post('s_city'),
            's_state' => $this->input->post('s_state'),
            's_zipcode' => $this->input->post('s_zip'),
            'b_address' => $this->input->post('b_address'),
            'b_city' => $this->input->post('b_city'),
            'b_state' => $this->input->post('b_state'),
            'b_zipcode' => $this->input->post('b_zip'),
            'created_at' => date("Y-m-d, H:i:s"),
        );

        $this->db->insert('transactions', $order_details);
        $insert_id = $this->db->insert_id();

        return $insert_id;
    }
}
