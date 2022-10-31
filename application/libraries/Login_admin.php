<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_admin
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_auth');
    }

    public function login($username_admin, $password)
    {
        $cek = $this->ci->m_auth->login_admin($username_admin,  $password);
        if ($cek) {
            $nama_admin = $cek->nama_admin;
            $username_admin = $cek->username_admin;
            $this->ci->session->set_userdata('username_admin', $username_admin);
            $this->ci->session->set_userdata('nama_admin', $nama_admin);
            redirect('admin');
        } else {
            $this->ci->session->set_flashdata('error', 'Username atau Password salah');
            redirect('auth/login_admin');
        }
    }

    public function proteksi()
    {
        if ($this->ci->session->userdata('username_admin') == '') {
            $this->ci->session->set_flashdata('error', 'Anda belum login');
            redirect('auth/login_admin');
        }
    }
    public function logout()
    {
        $this->ci->session->unset_userdata('username_admin');
        $this->ci->session->unset_userdata('nama_admin');
        $this->ci->session->set_flashdata('pesan', 'Anda berhasil Logout!');
        redirect('auth/login_admin');
    }
}



/* End of file LibraryName.php */
