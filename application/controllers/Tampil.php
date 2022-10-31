<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tampil extends CI_Controller
{
    public function index()
    {
        $data = array(

            'isi' => 'v_tampil',
        );
        $this->load->view('layout/v_wrapper_frontend', $data);
    }
}
