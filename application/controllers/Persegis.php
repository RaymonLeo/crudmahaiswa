<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Don't forget include/define REST_Controller path

/**
 *
 * Controller Persegis
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Persegis extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->library('persegi');
  }

  public function index()
  {
    $this->persegi->keliling('10');
    
  }

}


/* End of file Persegis.php */
/* Location: ./application/controllers/Persegis.php */