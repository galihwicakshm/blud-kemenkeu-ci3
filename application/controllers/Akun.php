
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{

    public function index()
    {
        $data = array(
            'title' => 'Editt Akun',
            'akun' => $this->m_data->akunLogin(),
            'isi' => 'v_akun',
        );
        $this->load->view('layout/v_wrapper_frontend', $data);
    }

    public function edit($kode_blud)
    {

        $this->form_validation->set_rules(
            'password_lama',
            'Password Lama',
            'required',
            array(
                'required' => '%s Harus diisi !',
                'matches' => '%s tidak sama !'
            )
        );

        $this->form_validation->set_rules(
            'password_lamaconf',
            'Password Lama',
            'required|matches[password_lama]',
            array(
                'required' => '%s Harus diisi !',
                'matches' => '%s tidak sama !'
            )
        );
        $this->form_validation->set_rules(
            'password',
            'Password Baru',
            'required',
            array(
                'required' => '%s Harus diisi !',
                'matches' => '%s tidak sama !'
            )
        );

        $this->form_validation->set_rules(
            'ulangi_password',
            'Konfirmasi Password',
            'required|matches[password]',
            array(
                'required' => '%s Harus diisi !',
                'matches' => '%s tidak sama !'
            )
        );


        if ($this->form_validation->run() == TRUE && $this->input->post('password') == $this->input->post('ulangi_password') && $this->input->post('password_lama') == $this->input->post('password_lamaconf')) {
            $data = array(
                'kode_blud' => $kode_blud,
                'password' => $this->input->post('password'),
            );
            $this->m_data->updateakun($data);
            $this->session->set_flashdata('pesan', 'Akun Berhasil DiUbah!');
            redirect('akun');
        } else {
            $data = array(
                'title' => 'Editt Akun',
                'akun' => $this->m_data->akunLogin(),
                'isi' => 'v_akun',
            );
            $this->load->view('layout/v_wrapper_frontend', $data);
        }
    }
}
