<?php
class Customer_model extends CI_Model
{

    public function get_categories()
    {
        return $this->db->query("SELECT * FROM categories")->result_array();
    }
}
