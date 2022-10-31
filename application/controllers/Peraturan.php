<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peraturan extends CI_Controller
{

    public function index()
    {

        $data = array(
            'title' => 'Peraturan',
            'isi' => 'v_peraturan',
            'getAllPeraturan' => $this->m_peraturan->getAllPeraturan1(),



        );
        $this->load->view('layout/v_wrapper_frontend', $data);
    }

    public function modulperaturan()
    {
        $data = array(
            'title' => 'Peraturan',
            'isi' => 'v_modul_peraturan',
            'getAllPeraturan' => $this->m_peraturan->getAllPeraturan(),


        );
        $this->load->view('layout/v_wrapper_frontend', $data);
    }
}
