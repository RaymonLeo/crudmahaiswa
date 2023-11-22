<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Hitungpersegis extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->library('persegi');
  }

  public function index()
  {
    $this->persegi->keliling('10');
        echo "<br/>";
        $this->persegi->luas('10');
  }

}

