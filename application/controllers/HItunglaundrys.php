<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Hitunglaundrys extends CI_Controller
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->library('laundry');
    }
    function index()
    {
        $this->laundry->laundry('setrika saja', '6.5' , 'ada','tidak ada', 'Ani');
        echo "<br/>";
        $this->laundry->laundry('cuci dan setrika', '8' , 'ada','ada', 'ina');
        echo "<br/>";
        $this->laundry->laundry('setrika saja', '3.5', 'tidak ada', 'tidak ada','Nia');
    }

}


