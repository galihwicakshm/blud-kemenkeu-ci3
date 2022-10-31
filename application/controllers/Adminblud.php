<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminblud extends CI_Controller
{
    public function index()
    {

        $data = array(
            'isi' => 'layout/backend/componen_backend/v_admin',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data);
    }
}
