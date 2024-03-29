<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa_model extends CI_Model
{
    public $tabel = 'mahasiswa';
    public $id = 'mahasiswa.id';

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
    {
        $query = $this->db->get($this->tabel);
        return $query->result_array();
    }

    public function getByid($id)
    {
        $this->db->select('m.*,p.nama as prodi');
        $this->db->from("mahasiswa m");
        $this->db->join("prodi p","m.prodi = p.id");
        $this->db->where('m.id', $id);
        $query = $this->db->get($this->tabel);
        return $query->row_array();
    }

    public function update($where, $data)
    {
        $this->db->update($this->tabel, $data, $where);
        return $this->db->affected_rows();
    }

    public function insert($data)
    {
        $this->db->insert($this->tabel, $data);
        return $this->db->insert_id();
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->tabel);
        return $this->db->affected_rows();
    }
}
