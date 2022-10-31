<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    // public function index()
    // {
    //     if (isset($_POST['submit'])) {
    //         $user = $this->input->post('user', true);
    //         $pass = $this->input->post('pass', true);
    //         $cek = $this->m_login->proseslogin();
    //     }
    // }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required', array(
            'required' => '%s Harus diisi!'
        ));

        $this->form_validation->set_rules('password', 'Password', 'required', array(
            'required' => '%s Harus diisi!'
        ));


        if ($this->form_validation->run() == TRUE) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->login_user->login($username, $password);
        }
        $data = array(
            'title' => 'Login User',
        );
        $this->load->view('v_login_user', $data, FALSE);
    }
    public function logout()
    {
        $this->login_user->logout();
    }
}

/* End of file Controllername.php */
