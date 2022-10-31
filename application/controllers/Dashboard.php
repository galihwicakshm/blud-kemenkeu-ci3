<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $data = array(
            'title' => 'Home',
            'isi' => 'v_dashboard',
        );
        $this->load->view('layout/v_wrapper_frontend', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}
