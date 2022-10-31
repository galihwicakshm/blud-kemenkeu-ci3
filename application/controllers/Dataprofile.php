<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dataprofile extends CI_Controller
{


    public function index()
    {

        $data = array(
            'isi' => 'v_dataprofile',
            'profile' => $this->m_data->cariKeuangan(),
            'allProf' => $this->m_data->allProf(),
            'title' => 'Dashboard Profil BLUD',

        );
        $this->load->view('layout/v_wrapper_frontend', $data);
    }

    public function data()
    {

        if ($idCari = $this->input->get('id')) {
        }
        $data = array(
            'isi' => 'v_dataprofile',
            'title' => 'Dashboard Profil BLUD',
            // 'dataTabel' => $this->m_data->getAllDataKeuangan(),
            // 'dataCari' => $this->m_data->getDataKeuangan($idCari),
            // 'dataCariTab2' => $this->m_data->getData($idCari),
            // 'dataProfile' => $this->m_data->getProfile($idCari),
            'profile' => $this->m_data->cariKeuangan(),
            'graphProfile' => $this->m_data->graphProfile($idCari),

        );
        $this->load->view('layout/v_wrapper_frontend', $data);
    }
}
