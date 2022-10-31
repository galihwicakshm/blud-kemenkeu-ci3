
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminprofile extends CI_Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Data',
            'isi' => 'profile/v_profile_admin',
            'dataProfile' => $this->m_admin->getProfile(),
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data);
    }

    public function pilihandata($id)
    {

        $data = array(
            'title' => 'Pilih Data',
            'data' => $this->m_admin->getDataProfile($id),
            'rumpun' => $this->m_admin->getRumpun(),
            'isi' => 'profile/v_pilihanedit_admin',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data, FALSE);
    }




    // public function add()
    // {
    //     $this->form_validation->set_rules(
    //         'nama_blud',
    //         'Nama Satkes',
    //         'required',
    //         array('required' => '%s Harus diisi !')
    //     );
    //     $this->form_validation->set_rules(
    //         'kode_blud',
    //         'Kode Satker',
    //         'required',
    //         array('required' => '%s Harus diisi !')
    //     );
    //     $this->form_validation->set_rules(
    //         'alamat',
    //         'Alamat',
    //         'required',
    //         array('required' => '%s Harus diisi !')
    //     );
    //     $this->form_validation->set_rules(
    //         'kode_pos',
    //         'Kode POS',
    //         'required',
    //         array('required' => '%s Harus diisi !')
    //     );
    //     $this->form_validation->set_rules(
    //         'fax',
    //         'Fax',
    //         'required',
    //         array('required' => '%s Harus diisi !')
    //     );
    //     $this->form_validation->set_rules(
    //         'email',
    //         'Email',
    //         'required',
    //         array('required' => '%s Harus diisi !')
    //     );
    //     $this->form_validation->set_rules(
    //         'visi',
    //         'Visi',
    //         'required',
    //         array('required' => '%s Harus diisi !')
    //     );
    //     $this->form_validation->set_rules(
    //         'misi',
    //         'Misi',
    //         'required',
    //         array('required' => '%s Harus diisi !')
    //     );
    //     $this->form_validation->set_rules(
    //         'telp',
    //         'Telpon',
    //         'required',
    //         array('required' => '%s Harus diisi !')
    //     );


    //     if ($this->form_validation->run() == TRUE) {
    //         $config['upload_path'] = './assets/img';
    //         $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
    //         $config['max_size'] = '2000';
    //         $this->upload->initialize($config);
    //         $field_name = "logo";
    //         if (!$this->upload->do_upload($field_name)) {
    //             $data = array(
    //                 'peraturan' => $this->m_peraturan->getData(),
    //                 'error_upload' => $this->upload->display_errors(),
    //                 'isi' => 'layout/backend/peraturan/v_add_profile_admin',
    //             );
    //             $this->load->view('layout/backend/v_wrapper_backend', $data, FALSE);
    //         } else {
    //             $upload_data = array('uploads' => $this->upload->data());
    //             $config['image_library'] = 'gd2';
    //             $config['source_image'] = './assets/img' . $upload_data['uploads']['file_name'];
    //             $this->load->library('image_lib', $config);
    //             $data = array(
    //                 'kode_blud' =>  $this->input->post('kode_blud'),
    //                 'nama_blud' => $this->input->post('nama_blud'),
    //                 'alamat' =>  $this->input->post('alamat'),
    //                 'kode_pos' =>  $this->input->post('kode_pos'),
    //                 'telp' =>  $this->input->post('telp'),
    //                 'fax' =>  $this->input->post('fax'),
    //                 'email' =>  $this->input->post('email'),
    //                 'visi' =>  $this->input->post('visi'),
    //                 'misi' => $this->input->post('misi'),
    //                 'logo' => $upload_data['uploads']['file_name'],

    //             );
    //             $this->m_profile->add($data);
    //             $this->session->set_flashdata('pesan', 'Peraturan Berhasil Ditambahkan!');
    //             redirect('adminprofile');
    //         }
    //     }

    //     $data = array(
    //         // 'peraturan' => $this->m_peraturan->getAllPeraturan(),
    //         'isi' => 'profile/v_add_profile_admin',
    //     );
    //     $this->load->view('layout/backend/v_wrapper_backend', $data, FALSE);
    // }


    // public function add()
    // {
    //     $data = array(
    //         // 'peraturan' => $this->m_peraturan->getAllPeraturan(),
    //         'rumpun' => $this->m_admin->getRumpun(),
    //         'isi' => 'profile/v_add_profile_admin',
    //     );
    //     $this->load->view('layout/backend/v_wrapper_backend', $data);
    // }



    public function add()
    {

        $this->form_validation->set_rules(
            'kode_blud',
            'Kode BLUD',
            'required',
            array('required' => '%s Harus diisi !')
        );

        if ($this->form_validation->run() == TRUE) {
            $foto           = $_FILES['foto']['name'];
            $logo           = $_FILES['logo']['name'];
            $strukturpdf          = $_FILES['strukturpdf']['name'];
            if ($foto) {
                $config['upload_path'] = './assets/img';

                $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                $config['source_image'] = './assets/img' . $foto['uploads']['file_name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('foto')) {
                    echo "Gambar gagal diupload !";
                } else {
                    $foto = $this->upload->data('file_name');
                }
            }
            if ($logo) {
                $config['upload_path'] = './assets/img';
                $config['allowed_types'] = 'jpg|png|jpeg';
                $config['source_image'] = './assets/img' . $logo['uploads']['file_name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('logo')) {
                    echo "Gambar gagal diupload !";
                } else {
                    $logo = $this->upload->data('file_name');
                }
            }
            if ($strukturpdf) {
                $config['upload_path'] = './assets/pdf';
                $config['allowed_types'] = 'jpg|png|jpeg|pdf';
                $config['source_image'] = './assets/pdf' . $strukturpdf['uploads']['file_name'];
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('strukturpdf')) {
                    echo "Gambar gagal diupload !";
                } else {
                    $strukturpdf = $this->upload->data('file_name');
                }
            }

            $data = array(
                'jabatan' =>  $this->input->post('jabatan'),
                'umur' =>  $this->input->post('umur'),
                'pendidikan' =>  $this->input->post('pendidikan'),
                'kode_blud' =>  $this->input->post('kode_blud'),
                'nama_blud' =>  $this->input->post('nama_blud'),
                'website' =>  $this->input->post('website'),
                'kode_pos' =>  $this->input->post('kode_pos'),
                'telp' =>  $this->input->post('telp'),
                'email' =>  $this->input->post('email'),
                'alamat' =>  $this->input->post('alamat'),
                'fax' =>  $this->input->post('fax'),
                'id_rumpun' =>  $this->input->post('id_rumpun'),
                'motto' =>  $this->input->post('motto'),
                'visi' =>  $this->input->post('visi'),
                'misi' => $this->input->post('misi'),
                'tujuan' => $this->input->post('tujuan'),
                'sejarah' => $this->input->post('sejarah'),
                'jumlahsdm' => $this->input->post('jumlahsdm'),
                'profilperaturan' => $this->input->post('profilperaturan'),
                'keuangan' => $this->input->post('keuangan'),
                'foto'        => $foto,
                'logo'        => $logo,
                'strukturpdf' => $strukturpdf,
                'peraturan_tarif' => $this->input->post('peraturan_tarif'),
                'peraturan_pengelolaan' => $this->input->post('peraturan_pengelolaan'),
                'peraturan_penetapan' => $this->input->post('peraturan_penetapan'),
                'peraturan_kerjasama' => $this->input->post('peraturan_kerjasama'),
                'peraturan_pengadaan' => $this->input->post('peraturan_pengadaan'),
                'peraturan_lainnya' => $this->input->post('peraturan_lainnya'),
            );

            $data_user = array(
                'kode_blud' =>  $this->input->post('kode_blud'),
                'nama' =>  $this->input->post('nama_blud'),
                'password' => $this->input->post('kode_blud'),
                'level' => 2,

            );


            $this->m_profile->add($data);
            $this->m_profile->adduser($data_user);
            $this->session->set_flashdata('pesan', 'Data Berhasil Ditambahkan!');
            redirect('adminprofile');
        }
        $data = array(
            // 'peraturan' => $this->m_peraturan->getAllPeraturan(),
            'title' => 'Tambah Data',
            'rumpun' => $this->m_admin->getRumpun(),
            'isi' => 'profile/v_add_profile_admin',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data);
    }



    public function edit($id)
    {
        $this->form_validation->set_rules(
            'kode_blud',
            'Kode BLUD',
            'required',
            array('required' => '%s Harus diisi !')
        );

        if ($this->form_validation->run() == TRUE) {

            $config['upload_path'] = './assets/img';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
            $config['max_size'] = '2000';
            $this->upload->initialize($config);
            $field_name = "foto";
            $field_name1 = "logo";
            $field_name2 = "strukturpdf";
            if (!$this->upload->do_upload($field_name)) {
                $data = array(
                    'data' => $this->m_admin->getDataProfile($id),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'profile/v_profile_detail_admin',
                );
                $this->load->view('layout/backend/v_wrapper_backend', $data, FALSE);
            } else {
                $admin = $this->m_profile->getdata($id);
                if (
                    $admin->foto != ""
                ) {
                    unlink('./assets/img/' . $admin->foto);
                }
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id' => $id,
                    'jabatan' =>  $this->input->post('jabatan'),
                    'umur' =>  $this->input->post('umur'),
                    'pendidikan' =>  $this->input->post('pendidikan'),
                    'kode_blud' =>  $this->input->post('kode_blud'),
                    'website' =>  $this->input->post('website'),
                    'telp' =>  $this->input->post('telp'),
                    'email' =>  $this->input->post('email'),
                    'alamat' =>  $this->input->post('alamat'),
                    'fax' =>  $this->input->post('fax'),
                    'id_rumpun' =>  $this->input->post('id_rumpun'),
                    'motto' =>  $this->input->post('motto'),
                    'visi' =>  $this->input->post('visi'),
                    'misi' => $this->input->post('misi'),
                    'tujuan' => $this->input->post('tujuan'),
                    'sejarah' => $this->input->post('sejarah'),
                    'foto' => $upload_data['uploads']['file_name'],
                );
                $this->m_profile->update($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
                print_r($this->upload->data());
                redirect('adminprofile');
            }
            if (!$this->upload->do_upload($field_name1)) {
                $data = array(
                    'data' => $this->m_admin->getDataProfile($id),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'profile/v_profile_detail_admin',
                );
                $this->load->view('layout/backend/v_wrapper_backend', $data, FALSE);
            } else {
                $admin = $this->m_profile->getdata($id);
                if (

                    $admin->logo != ""
                ) {
                    unlink('./assets/img/' . $admin->logo);
                }
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id' => $id,
                    'jabatan' =>  $this->input->post('jabatan'),
                    'umur' =>  $this->input->post('umur'),
                    'pendidikan' =>  $this->input->post('pendidikan'),
                    'kode_blud' =>  $this->input->post('kode_blud'),
                    'website' =>  $this->input->post('website'),
                    'telp' =>  $this->input->post('telp'),
                    'email' =>  $this->input->post('email'),
                    'alamat' =>  $this->input->post('alamat'),
                    'fax' =>  $this->input->post('fax'),
                    'id_rumpun' =>  $this->input->post('id_rumpun'),
                    'motto' =>  $this->input->post('motto'),
                    'visi' =>  $this->input->post('visi'),
                    'misi' => $this->input->post('misi'),
                    'tujuan' => $this->input->post('tujuan'),
                    'sejarah' => $this->input->post('sejarah'),
                    'logo' => $upload_data['uploads']['file_name'],
                );
                $this->m_profile->update($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
                redirect('adminprofile');
            }
            if (!$this->upload->do_upload($field_name2)) {
                $data = array(
                    'data' => $this->m_admin->getDataProfile($id),
                    'error_upload' => $this->upload->display_errors(),
                    'isi' => 'profile/v_profile_detail_admin',
                );
                $this->load->view('layout/backend/v_wrapper_backend', $data, FALSE);
            } else {
                $admin = $this->m_profile->getdata($id);
                if (

                    $admin->strukturpdf != ""
                ) {
                    unlink('./assets/img/' . $admin->strukturpdf);
                }
                $upload_data = array('uploads' => $this->upload->data());
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img' . $upload_data['uploads']['file_name'];
                $this->load->library('image_lib', $config);
                $data = array(
                    'id' => $id,
                    'jabatan' =>  $this->input->post('jabatan'),
                    'umur' =>  $this->input->post('umur'),
                    'pendidikan' =>  $this->input->post('pendidikan'),
                    'kode_blud' =>  $this->input->post('kode_blud'),
                    'website' =>  $this->input->post('website'),
                    'telp' =>  $this->input->post('telp'),
                    'email' =>  $this->input->post('email'),
                    'alamat' =>  $this->input->post('alamat'),
                    'fax' =>  $this->input->post('fax'),
                    'id_rumpun' =>  $this->input->post('id_rumpun'),
                    'motto' =>  $this->input->post('motto'),
                    'visi' =>  $this->input->post('visi'),
                    'misi' => $this->input->post('misi'),
                    'tujuan' => $this->input->post('tujuan'),
                    'sejarah' => $this->input->post('sejarah'),
                    'strukturpdf' => $upload_data['uploads']['file_name'],
                );
                $this->m_profile->update($data);
                $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
                redirect('adminprofile');
            }



            $data = array(
                'id' => $id,
                'jabatan' =>  $this->input->post('jabatan'),
                'umur' =>  $this->input->post('umur'),
                'pendidikan' =>  $this->input->post('pendidikan'),
                'kode_blud' =>  $this->input->post('kode_blud'),
                'website' =>  $this->input->post('website'),
                'telp' =>  $this->input->post('telp'),
                'email' =>  $this->input->post('email'),
                'alamat' =>  $this->input->post('alamat'),
                'fax' =>  $this->input->post('fax'),
                'id_rumpun' =>  $this->input->post('id_rumpun'),
                'motto' =>  $this->input->post('motto'),
                'visi' =>  $this->input->post('visi'),
                'misi' => $this->input->post('misi'),
                'tujuan' => $this->input->post('tujuan'),
                'sejarah' => $this->input->post('sejarah'),

            );
            $this->m_profile->update($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diubah!');
            print_r($this->upload->data());
            redirect('adminprofile');
        }



        $data = array(
            'data' => $this->m_admin->getDataProfile($id),
            'rumpun' => $this->m_admin->getRumpun(),
            'isi' => 'profile/v_edit_profile_admin',
        );
        $this->load->view('layout/backend/v_wrapper_backend', $data, FALSE);
    }

    public function delete($id)
    {
        $admin = $this->m_profile->getdata($id);
        if ($admin->logo != "" && $admin->foto != "") {
            unlink('./assets/img/' . $admin->logo);
            unlink('./assets/img/' . $admin->foto);
        }

        $data = array('id' => $id);
        $this->m_profile->delete($data);
        $this->session->set_flashdata('pesan', 'Data berhasil dihapus!');
        redirect('adminprofile');
    }
}
