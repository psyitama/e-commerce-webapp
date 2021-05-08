<?php
class Customer_model extends CI_Model
{

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
        return $this->db->query("SELECT * FROM products WHERE category_id=? AND id!=$product_id ORDER BY sold_count DESC LIMIT 8", $category_id, $product_id)->result_array();
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
}
