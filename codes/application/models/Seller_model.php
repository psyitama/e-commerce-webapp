<?php
class Seller_model extends CI_Model
{

    public function add_product($post)
    {
        $query = "INSERT into products (category_id, name, description, price, main_image_url, inventory_count, sold_count, created_at) VALUES (?,?,?,?,?,?,DEFAULT,NOW())";
        $values = array($post['categories'], $post['product'], $post['description'], $post['price'], $post['image'], $post['inventory_count']);
        return $this->db->query($query, $values);
    }

    public function get_all_products()
    {
        return $this->db->query("SELECT * FROM products")->result_array();
    }

    public function get_product_categories()
    {
        return $this->db->query("SELECT * FROM categories")->result_array();
    }

    public function delete_product($post)
    {
        return $this->db->query("DELETE FROM products WHERE id =?", $post['id']);
    }

    public function validate_product($post)
    {
        $product_validations = array(
            array(
                'field' => 'product',
                'label' => 'Product',
                'rules' => 'required|min_length[3]',
            ),
            array(
                'field' => 'description',
                'label' => 'Description',
                'rules' => 'required',
            ),
            array(
                'field' => 'price',
                'label' => 'Price',
                'rules' => 'required|numeric|greater_than[0]',
            ),
            array(
                'field' => 'inventory_count',
                'label' => 'Inventory Count',
                'rules' => 'required|numeric|greater_than[0]',
            ),
        );
        $this->form_validation->set_rules($product_validations);
        if ($this->form_validation->run()) {
            return "valid";
        } else {
            return array(validation_errors());
        }
    }

    public function do_upload()
    {
        $config = array(
            'upload_path' => './uploads/',
            'allowed_types' => 'gif|jpg|png',
            'max_width' => 4096,
            'encrypt_name' => true,
        );

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('image')) {
            $result = array('error' => $this->upload->display_errors());
            return $result;
        } else {
            $result = array('data' => $this->upload->data('file_name'));
            return $result;
        }
    }
}
