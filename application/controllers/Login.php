<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      // load session library
      $this->load->library('session');
      $this->load->helper('url');
      //kembali ke dashoard
      
    }

    public function index(){
        $this->load->view('login_page');
    }

    //mencegah penyusup, data session
    function akses_masuk(){
      $this->load->view('template/403');
    }
  

    public function Auth() {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $user = $this->db->get_where('user',['username' => $username])->row_array();
      if (password_verify($password,$user['password'])) {
        if ($user['is_aktif'] == 1){
            $data = [
              'id' => $user['id'],
              'email' => $user['email'],
              'name' => $user['name'],
              'role' => $user['role']
            ];
            $session = $this->session->set_userdata($user);
            // print_r($this->session->userdata());
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible show fade">
              <div class="alert-body">
                <button class="close" data-dismiss="alert">
                  <span>&times;</span>
                </button>
                Berhasil Login!
          </div>
          </div>
          ');
          
          $data = $this->session->userdata();

          if($data['role'] == "admin"){
            redirect('admin/dashboard');
              $data['title'] = 'Dashboard Admin';
              $this->load->view('template/header',$data);
              $this->load->view('template/sidebar');
              $this->load->view('template/content',$data);
              $this->load->view('template/footer');
            }elseif ($data['role'] == "user"){
              $data['session'] = $this->session->userdata();
              $data['title'] = 'Dashboard User';
              $this->load->view('template/header',$data);
              $this->load->view('template/sidebar');
              $this->load->view('template/content',$data);
              $this->load->view('template/footer');
            }
        }else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
          Silahkan Aktivasi Akun terlebih dahulu!!
          </div>');
          redirect('/login');
        }
                
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Email atau password salah!
      </div>');
      redirect('/login');
    }

    }

    public function logout()
    {
      $this->session->sess_destroy();
      redirect('/login');
    }
    


    
}
