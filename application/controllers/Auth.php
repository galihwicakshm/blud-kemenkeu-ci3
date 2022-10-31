<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function index()
    {
        if ($this->session->userdata('level') == 1) {
            redirect('admin');
        } elseif ($this->session->userdata('level') == 2) {
            redirect('dashboard');
        } elseif ($this->session->userdata('level') == 3) {
            redirect('gudang');
        } else {
            $data = array(
                'title' => 'Form Login',
                'fieldset' => 'Login Multilevel'
            );
            $this->load->view('v_login_user', $data);
        }
        $this->load->library('recaptcha');
        $recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
                $kode_blud = $this->input->post('kode_blud');
                $password = $this->input->post('password');
                $cek = $this->m_login->cek_users($kode_blud, $password);
                if ($cek->num_rows() == 1) {
                    foreach ($cek->result() as $data) {
                        $users = array(
                            'id' => $data->id,
                            'kode_blud' => $data->kode_blud,
                            'nama' => $data->nama,
                            'username' => $data->username,
                            'level' => $data->level,

                        );
                        $this->session->set_userdata($users);
                        if ($this->session->userdata('level') == 1) {
                            redirect('admin');
                        } elseif ($this->session->userdata('level') == 2) {
                            redirect('dashboard');
                        } else {
                            echo 'tidak masuk kategori';
                        }
                    }
                } else {
                    $this->session->set_flashdata('error', 'Kode BLUD atau Password salah');
                    redirect('auth');
                }
            }
            $this->session->set_flashdata('error', 'Silahkan isi reCaptcha');
            redirect('auth');
        }
    }


    // public function proses()
    // {
    //     $kode_blud = $this->input->post('kode_blud');
    //     $password = $this->input->post('password');

    //     $cek = $this->m_login->cek_users($kode_blud, $password);

    //     if ($cek->num_rows() == 1) {
    //         foreach ($cek->result() as $data) {
    //             $users = array(
    //                 'id' => $data->id,
    //                 'nama' => $data->nama,
    //                 'username' => $data->username,
    //                 'level' => $data->level,
    //                 'kode_blud' => $data->kode_blud,
    //             );

    //             $this->session->set_userdata($users);

    //             if ($this->session->userdata('level') == 1) {
    //                 redirect('admin');
    //             } elseif ($this->session->userdata('level') == 2) {
    //                 redirect('dashboard');
    //             } else {
    //                 echo 'tidak masuk kategori';
    //             }
    //         }
    //     } else {
    //         $this->session->set_flashdata('error', 'Kode BLUD atau Password salah');
    //         redirect('auth');
    //     }
    // }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }


    public function indexasli()
    {
        $this->load->library('recaptcha');
        $recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
                redirect('auth/proses');
            }
        }

        $data = array(
            'widget' => $this->recaptcha->getWidget(),
            'script' => $this->recaptcha->getScriptTag(),
        );
        $this->load->view('v_login_user', $data);
        if ($this->session->userdata('level') == 1) {
            redirect('admin');
        } elseif ($this->session->userdata('level') == 2) {
            redirect('dashboard');
        } elseif ($this->session->userdata('level') == 3) {
            redirect('gudang');
        } else {
            $data = array(
                'title' => 'Form Login',
                'fieldset' => 'Login Multilevel'
            );
            $this->load->view('v_login_user', $data);
        }
    }
}
