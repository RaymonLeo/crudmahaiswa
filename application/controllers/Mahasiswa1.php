<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Mahasiswa1 extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');

  }

  public function index()
  {
    $data['judul'] = "Halaman Mahasiswa";
    $data['Mahasiswa1'] = $this->session->userdata('mahasiswas');
    $this->load->view('mahasiswa/mahasiswa_view', $data);
  }

  public function create()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');

    if ($this->form_validation->run() === FALSE) {
      $this->load->view('mahasiswa/create_mahasiswa');
    } else {
      $mahasiswas = $this->session->userdata('mahasiswas');
      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
      ];
      $mahasiswas[] = $data;
      $this->session->set_userdata('mahasiswas', $mahasiswas);
      redirect('Mahasiswa1');
    }
  }
  public function edit($id)
  {
    $data['Mahasiswa1'] = $this->session->userdata('mahasiswas');
    $mahasiswa = $data['Mahasiswa1'][$id];

    $this->load->view('edit_mahasiswa', array('id' => $id, 'nama' => $mahasiswa['nama'], 'nim' => $mahasiswa['nim']));
  }


  public function update($id)
  {
    $data['Mahasiswa1'] = $this->session->userdata('mahasiswas');

    $data['Mahasiswa1'][$id]['nama'] = $this->input->post('nama');
    $data['Mahasiswa1'][$id]['nim'] = $this->input->post('nim');

    $this->session->set_userdata('mahasiswas', $data['Mahasiswa1']);

    redirect('Mahasiswa1');
  }

  public function delete($id)
  {
    $data['Mahasiswa1'] = $this->session->userdata('mahasiswas');
    unset($data['Mahasiswa1'][$id]);

    $this->session->set_userdata('mahasiswas', $data['Mahasiswa1']);

    redirect('Mahasiswa1');
  }
}




/* End of file Mahasiswa1.php */
/* Location: ./application/controllers/Mahasiswa1.php */