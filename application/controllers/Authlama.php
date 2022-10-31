<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function login_admin()
    {
        $this->form_validation->set_rules('username_admin', 'Username', 'required', array(
            'required' => '%s Harus diisi!'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus diisi!'
        ));
        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username_admin');
            $password = $this->input->post('password');

            $this->login_admin->login($username, $password);
        }
        $data = array(
            'title' => 'Login Admin',
        );
        $this->load->view('layout/backend/componen_backend/v_login_admin', $data);
    }
    public function logout_admin()
    {
        $this->login_admin->logout();
    }
}

/* End of file Controllername.php */
