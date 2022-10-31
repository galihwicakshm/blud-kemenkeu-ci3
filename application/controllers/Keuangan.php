<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{


    public function index()
    {

        $data = array(
            'isi' => 'v_keuangan',
            // 'dataCari' => $this->m_data->getDataKeuangan($idCari),
            // 'dataTabel' => $this->m_data->getAllDataKeuangan(),
            'dataKeu' => $this->m_data->cariKeuangan(),
            'allKeu' => $this->m_data->allKeu(),
            'title' => 'Dashboard Keuangan BLUD',

        );
        $this->load->view('layout/v_wrapper_frontend', $data);
    }
    public function data()
    {

        if ($idCari = $this->input->get('id')) {
        }
        $data = array(
            'isi' => 'v_keuangan',
            'title' => 'Dashboard Keuangan BLUD',
            // 'dataTabel' => $this->m_data->getAllDataKeuangan(),
            // 'dataCari' => $this->m_data->getDataKeuangan($idCari),
            // 'dataCariTab2' => $this->m_data->getData($idCari),
            // 'dataProfile' => $this->m_data->getProfile($idCari),
            'dataKeu' => $this->m_data->cariKeuangan(),
            'graphKeu' => $this->m_data->graphKeu($idCari),

        );
        $this->load->view('layout/v_wrapper_frontend', $data);
    }
}
