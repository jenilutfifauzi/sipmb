<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      // load session library
      $this->load->library('session');
      $this->load->helper('url');
      $this->load->model('m_admin');
     
    }

    public function index(){
        $this->load->view('Home/guest');
    }


}
