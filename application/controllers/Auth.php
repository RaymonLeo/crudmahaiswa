<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'userrole');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('Mahasiswa');
        }

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'trim|required', [
            'required' => 'Password Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view('layout/auth_header');
            $this->load->view("auth/login");
            $this->load->view('layout/auth_footer');
        } else {
            $this->cek_login();
        }
    }

    public function registrasi()
    {
        if ($this->session->userdata('email')) {
            redirect('Mahasiswa');
        }

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'Email ini sudah terdaftar',
            'valid_email' => 'Email Harus Valid',
            'required' => 'Email Wajib di isi'
        ]);
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'Password Tidak Sama',
                'min_length' => 'Password Terlalu Pendek',
                'required' => 'Password Wajib di isi'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password Confirmation', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Registration';
            $this->load->view('layout/auth_header', $data);
            $this->load->view("auth/registrasi");
            $this->load->view('layout/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'gambar' => 'default.jpg',
                'role' => 'User',
                'date_created' => date('Y-m-d')
            ];

            $this->userrole->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat Akunmu telah berhasil terdaftar, Silahkan Login!</div>');
            redirect('Auth');
        }
    }

    public function cek_login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'email' => $user['email'],
                    'role' => $user['role'],
                    'id' => $user['id'],
                ];

                $this->session->set_userdata($data);

                if ($user['role'] == 'Admin') {
                    redirect('Mahasiswa');
                } else {
                    redirect('Profil');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger">Password Salah!</div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Email tidak terdaftar!</div>');
            redirect('Auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Logout!</div>');
        redirect('Auth');
    }
}

/* End of file  Auth.php */