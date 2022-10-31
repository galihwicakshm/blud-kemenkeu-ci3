<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $data = array(
            'title' => 'Dashboard',
            'isi' => 'layout/backend/componen_backend/v_admin',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
