<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ml extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ml_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Pemain Mobile Legend";
        $data['ml'] = $this->Ml_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('ml/vw_ml', $data);
        $this->load->view('layout/footer', $data);
    }

    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Pemain Mobile Legend";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('id_ml', 'ID Pemain', 'required', [
            'required' => 'ID Pemain Wajib di isi'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username Pemain Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Pemain Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required', [
            'required' => 'No HP Pemain Wajib di isi'
        ]);
        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("ml/vw_tambah_pemain", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'id_ml' => $this->input->post('id_ml'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp'),
                'tanggal_masuk' => date('Y-m-d'),
            ];
            $this->Ml_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert ">Data Pemain Berhasil Ditambah!</div>');
            redirect('ml'); // Ganti 'Ml' menjadi 'ml' agar sesuai dengan nama controller.
        }
    }

    public function hapus($id)
    {
        $this->Ml_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-into-circle"></i>Data Pemain tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pemain Berhasil Dihapus!</div>');
        }
        redirect('ml');
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Pemain Mobile Legend";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ml'] = $this->Ml_model->getById($id);

        $this->form_validation->set_rules('id_ml', 'ID Pemain', 'required', [
            'required' => 'ID Pemain Wajib di isi'
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required', [
            'required' => 'Username Pemain Wajib di isi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required', [
            'required' => 'Email Pemain Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp', 'No HP', 'required', [
            'required' => 'No HP Pemain Wajib di isi'
        ]);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("layout/header", $data);
            $this->load->view("ml/vw_ubah_pemain", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'id_ml' => $this->input->post('id_ml'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp'),
            ];

            $id = $this->input->post('id');
            $this->Ml_model->update(['id' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pemain Berhasil DiUbah!</div>');
            redirect('ml');
        }
    }
}
