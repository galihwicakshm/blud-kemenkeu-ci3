<?php defined('BASEPATH') or exit('No direct script access allowed');

class Uploadfoto extends CI_Controller
{
    public function edit($id)
    {
        $data = array(
            'data' => $this->m_admin->getDataProfile($id),
            'rumpun' => $this->m_admin->getRumpun(),
            'isi' => 'profile/v_uploadfoto_admin',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data, FALSE);
    }
}
