<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = "Form Pendaftaran";
        $data['Pendaftaran'] = $this->session->userdata('mahasiswas');
        $this->load->view('layout/header2', $data);
        $this->load->view('pendaftaran/vw_pendaftaran', $data);
        $this->load->view('layout/footer2', $data);
    }
    public function tambah()
    {
        $data['judul'] = "Form Daftar Mahasiswa";
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nisn', 'NISN', 'required|numeric');
        $this->form_validation->set_rules('nik', 'NIK', 'required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|numeric');
        $this->form_validation->set_rules('no_wa', 'No WA', 'required|numeric');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat Lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl Lahir', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('kabting', 'Kabupaten Tinggal', 'required');
        $this->form_validation->set_rules('kecating', 'Kecamatan Tinggal', 'required');
        $this->form_validation->set_rules('kabuseko', 'Kabupaten Sekolah', 'required');
        $this->form_validation->set_rules('sekolah_asal', 'Sekolah Asal', 'required');
        $this->form_validation->set_rules('jurusan', 'Jurusan', 'required');
        $this->form_validation->set_rules('Tahun_lulus', 'Tahun Lulus', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('mahasiswa/create_mahasiswa');
            $this->load->view('layout/header2', $data);
            $this->load->view('pendaftaran/vw_daftar_mahasiswa', $data);
            $this->load->view('layout/footer2', $data);
        } else {
            $mahasiswas = $this->session->userdata('mahasiswas');

            $data = [
                'nama' => $this->input->post('nama'),
                'nisn' => $this->input->post('nisn'),
                'nik' => $this->input->post('nik'),
                'email' => $this->input->post('email'),
                'no_hp' => $this->input->post('no_hp'),
                'no_wa' => $this->input->post('no_wa'),
                'tempat_lahir' => $this->input->post('tempat_lahir'),
                'tgl_lahir' => $this->input->post('tgl_lahir'),
                'jk' => $this->input->post('jk'),
                'kabting' => $this->input->post('kabting'),
                'kecating' => $this->input->post('kecating'),
                'kabuseko' => $this->input->post('kabuseko'),
                'sekolah_asal' => $this->input->post('sekolah_asal'),
                'jurusan' => $this->input->post('jurusan'),
                'tahun_lulus' => $this->input->post('tahun_lulus'),
            ];
            $mahasiswas[] = $data;
            $this->session->set_userdata('mahasiswas', $mahasiswas);

            redirect('Pendaftaran');
        }
    }
    public function login()
    {
        $this->load->view('layout/auth_header');
        $this->load->view("Pendaftaran/login");
        $this->load->view('layout/auth_footer');

        $this->cek_login();
    }
    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        if ($email == 'raymon22ti@mahasiswa.pcr.ac.id' && $password == '123') {
            redirect('Pendaftaran/tambah');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Password Salah!</div>');
            redirect('Pendaftaran/login');
        }
    }
}
