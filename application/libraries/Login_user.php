<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login_user
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('m_auth');
    }

    public function login($username, $password)
    {
        $cek = $this->ci->m_auth->login_user($username, $password);
        if ($cek) {
            $id = $cek->id;
            $nama = $cek->nama;
            $username = $cek->username;
            $this->ci->session->set_userdata('id', $id);
            $this->ci->session->set_userdata('nama', $nama);
            $this->ci->session->set_userdata('username', $username);
            redirect('/');
        } else {
            $this->ci->session->set_flashdata('error', 'Email atau Password salah');
            redirect('login');
        }
    }

    public function proteksi()
    {
        if ($this->ci->session->userdata('username') == '') {
            $this->ci->session->set_flashdata('error', 'Anda belum login');
            redirect('login');
        }
    }
    public function logout()
    {
        $this->ci->session->unset_userdata('id');
        $this->ci->session->unset_userdata('nama');
        $this->ci->session->unset_userdata('username');
        $this->ci->session->set_flashdata('pesan', 'Anda berhasil Logout!');
        redirect('login');
    }
}



/* End of file LibraryName.php */
