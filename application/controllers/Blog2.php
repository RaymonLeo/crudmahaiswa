<?php 
defined('BASEPATH') or exit('No direct scrip acces allowed');
class Blog2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['judul'] = "Judul blog";
        $data['isi'] = "Isi Blog";
        $this->load->view("blog_view", $data);
        //$out = $this->load->view("blog_view", $data,true);
        //echo $out;
    }
}
?>

