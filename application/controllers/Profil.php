<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{


    public function index()
    {

        if ($idCari = $this->input->get('id')) {
        }
        $data = array(
            'isi' => 'v_profil',
            'title' => 'Profil',
            'dataTabel' => $this->m_data->getAllData(),
            'dataCari' => $this->m_data->getData($idCari),
            'dataCariTab2' => $this->m_data->getData($idCari),
        );
        $this->load->view('layout/v_wrapper_frontend', $data);
    }

    public function data()
    {

        if ($idCari = $this->input->get('id')) {
        }
        $data = array(
            'isi' => 'v_profil',
            'title' => 'Profil',
            'dataTabel' => $this->m_data->getAllData(),
            'dataCari' => $this->m_data->getData($idCari),
            'dataCariTab2' => $this->m_data->getData($idCari),
            'dataProfile' => $this->m_data->getProfile($idCari),

        );
        $this->load->view('layout/v_wrapper_frontend', $data);
    }
}
