<?php

class Pages extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/index');
        $this->load->view('templates/footer');
    }

    public function signup()
    {
        $this->load->view('templates/header');
        $this->load->view('pages/signup');
        $this->load->view('templates/footer');
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));
        $user = $this->page->get_user_by_email($email);
        if ($user && $user['password'] == $password) {
            $user_data = array(
                'is_logged_in' => true,
                'user_id' => $user['id'],
                'email' => $user['email'],
                'user_level' => $user['user_level'],
            );
            $this->session->set_userdata($user_data);
            if ($user['user_level'] == 'admin') {
                redirect('dashboard');
            } else {
                redirect('products');
            }
        } else {
            $validation_errors = array(
                "email" => form_error('email'),
                "login_error" => "Invalid email or password!",
            );
            $this->session->set_flashdata($validation_errors);
            redirect(base_url());
        }
    }

    public function register()
    {
        $result = $this->page->validate_registration($this->input->post());
        if ($result == "valid") {
            $this->page->create_user($this->input->post());
            $user = $this->page->check_user_level($this->input->post('email'));
            $user_data = array(
                'is_logged_in' => true,
                'user_id' => $user['id'],
                'email' => $user['email'],
                'user_level' => $user['user_level'],
            );
            $this->session->set_userdata($user_data);
            $this->session->set_flashdata('success', 'Welcome! Registration was successful!');
            if ($user == 'admin') {
                redirect('dashboard');
            } else {
                redirect('products');
            }

        } else {
            $validation_errors = array(
                "first_name" => form_error('first_name'),
                "last_name" => form_error('last_name'),
                "email" => form_error('email'),
                "password" => form_error('password'),
                "confirm_password" => form_error('confirm_password'),
                "user_level" => form_error('user_level'),
            );
            $this->session->set_flashdata($validation_errors);
            redirect('signup');
        }
    }

}
