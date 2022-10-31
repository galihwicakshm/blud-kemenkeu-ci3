<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Input extends CI_Controller
{
    public function index()
    {
        $data = array(

            'isi' => 'v_input',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data);
    }
}
