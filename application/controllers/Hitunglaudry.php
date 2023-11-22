<?php
defined('BASEPARTH') or exit('No direct script acess allowed');

class Hitunglaundry extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('laundry');
    }
    function index()
    {
        $this->laundry->laundry123('setrika saja', '6.5' , 'ada','tidak ada', 'Ani');
        echo "<br/>";
        $this->laundry->laundry123('cuci dan setrika', '8' , 'ada', 'Ani');
        echo "<br/>";
        $this->laundry->laundry123('setrika saja', '6.5', 'ada', 'Ani');
    }
}