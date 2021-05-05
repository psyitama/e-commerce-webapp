<?php
class Page_model extends CI_Model
{

    public function get_user_by_email($user_email)
    {
        return $this->db->query("SELECT * FROM users WHERE email = ?", array($user_email))->row_array();
    }

    public function create_user($user)
    {
        date_default_timezone_set('Asia/Manila');
        $query = "INSERT INTO users (first_name, last_name, email, password, user_level, created_at) VALUES (?,?,?,?,?,?)";
        $values = array($user['first_name'], $user['last_name'], $user['email'], md5($user['password']), $user['user_level'], date("Y-m-d, H:i:s"));
        return $this->db->query($query, $values);
    }

//new
    public function validate_login($post)
    {
        $config = array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required',
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[8]',
            ),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            return "valid";
        } else {
            return array(validation_errors());
        }
    }

    public function validate_registration($post)
    {
        $config = array(
            array(
                'field' => 'email',
                'label' => 'Email',
                'rules' => 'trim|required|valid_email|is_unique[users.email]',
            ),
            array(
                'field' => 'first_name',
                'label' => 'First Name',
                'rules' => 'trim|required',
            ),
            array(
                'field' => 'last_name',
                'label' => 'Last Name',
                'rules' => 'trim|required',
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'trim|required|min_length[8]',
            ),
            array(
                'field' => 'confirm_password',
                'label' => 'Password Confirmation',
                'rules' => 'trim|required|matches[password]',
            ),
            array(
                'field' => 'user_level',
                'label' => 'User level',
                'rules' => 'required',
            ),
        );
        $this->form_validation->set_rules($config);
        if ($this->form_validation->run()) {
            return "valid";
        } else {
            return array(validation_errors());
        }
    }

}
