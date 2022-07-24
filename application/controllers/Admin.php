<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      // load session library
      $this->load->library('session');
      $this->load->helper('url');
      $this->load->model('m_admin');
     
    }

    public function index(){
        // $this->load->view('login_page');
    }

    //mencegah penyusup, data session
    function akses_masuk(){
      $this->load->view('template/403');
    }
  

    public function Dashboard() {
      $data['session'] = $this->session->userdata();
      $data['title'] = 'Dashboard Admin';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar');
      $this->load->view('template/content');
      $this->load->view('template/footer');       
    }
    public function data_user() {
      $data['session'] = $this->session->userdata();
      $data['title'] = 'Data User';
      $data['data_user'] = $this->db->get('user')->result_array();
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar');
      $this->load->view('admin/data_user');
      $this->load->view('template/footer');       
    }
    public function tambah_user() {
      $data['session'] = $this->session->userdata();
      $data['title'] = 'Tambah Data User';
      $data['data_user'] = $this->m_admin->lihat_data_user();
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar');
      $this->load->view('admin/tambah_user');
      $this->load->view('template/footer');       
    }

    public function aksi_tambah_user()
      {
        $username 			       = $this->input->post('username');
        $nama_lengkap 			   = $this->input->post('nama_lengkap');
        $pass_mentah 			     = $this->input->post('password');
        $password              =  password_hash($pass_mentah, PASSWORD_DEFAULT);
        
        $data_user = array(
          'id' => '',
          'username' => $username,
          'name' => $nama_lengkap,
          'password' => $password,
          'role'  => 'user',
          );
        $this->m_admin->insert_data('user',$data_user);
        echo $this->session->set_flashdata('message', '<div        class="alert alert-success" role="alert">
        Akun Berhasil Ditambahkan <button type= "button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            </div>');
        redirect(base_url('index.php/admin/data_user/'));  
        // Header('location: base_url()."pencairan/validasi_pin/".$id_data);  
        }

    public function delete_user($id)
    {
      $where = array('id' => $id);
      $this->m_admin->hapus_data($where,'user');
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Data User Berhasil Dihapus
      </div>');
      redirect('admin/data_user');
    }
    public function delete_prodi($id)
    {
      $where = array('id' => $id);
      $this->m_admin->hapus_data($where,'p_prodi');
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Data Prodi Berhasil Dihapus
      </div>');
      redirect('admin/data_pendaftaran');
    }
    public function delete_data_asal_sekolah($id)
    {
      $where = array('id' => $id);
      $this->m_admin->hapus_data($where,'data_asal_sekolah');
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Data Asal Sekolah Berhasil Dihapus
      </div>');
      redirect('admin/data_pendaftaran');
    }
    public function delete_data_identitas($id)
    {
      $where = array('id' => $id);
      $this->m_admin->hapus_data($where,'data_identitas');
      $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
      Data Identitas Berhasil Dihapus
      </div>');
      redirect('admin/data_pendaftaran');
    }
    public function edit_user($id)
    {
      $data['session'] = $this->session->userdata();
      $id = $this->uri->segment(3);
      $where = array('id' => $id);
      $data['title'] = 'Edit Data User';
      $data['data_user'] = $this->m_admin->edit_data($where,'user')->result_array();
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar');
      $this->load->view('admin/edit_user');
      $this->load->view('template/footer');  
    }
    public function edit_data_identitas($id)
    {
      $data['session'] = $this->session->userdata();
      $id = $this->uri->segment(3);
      $where = array('id' => $id);
      $data['title'] = 'Edit Data Identitas';
      $data['data_user'] = $this->m_admin->edit_data($where,'data_identitas')->result_array();
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar');
      $this->load->view('admin/edit_data_identitas');
      $this->load->view('template/footer');  
    }
    public function edit_data_asal_sekolah($id)
    {
      $data['session'] = $this->session->userdata();
      $id = $this->uri->segment(3);
      $where = array('id' => $id);
      $data['title'] = 'Edit Data Asal Sekolah';
      $data['data_user'] = $this->m_admin->edit_data($where,'data_asal_sekolah')->result_array();
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar');
      $this->load->view('admin/edit_data_asal_sekolah');
      $this->load->view('template/footer');  
    }
    public function edit_prodi($id)
    {
      $data['session'] = $this->session->userdata();
      $id = $this->uri->segment(3);
      $where = array('id' => $id);
      $data['title'] = 'Edit Data Prodi';
      $data['data_user'] = $this->m_admin->edit_data($where,'p_prodi')->result_array();
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar');
      $this->load->view('admin/edit_data_prodi');
      $this->load->view('template/footer');  
    }
    public function aksi_edit_user()
      {
        $username 			       = $this->input->post('username');
        $nama_lengkap 			   = $this->input->post('nama_lengkap');
        $pass_mentah 			     = $this->input->post('password');
        $password              =  password_hash($pass_mentah, PASSWORD_DEFAULT);
        $id = $this->uri->segment(3);
        $where = array('id' => $id);
        $update_data_user = array(
          'username' => $username,
          'name' => $nama_lengkap,
          'password' => $password,
          'role'  => 'user',
          );
        $this->m_admin->update_data($where,$update_data_user,'user');
        echo $this->session->set_flashdata('message', '<div        class="alert alert-success" role="alert">
        Akun Berhasil Ditambahkan <button type= "button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            </div>');
        redirect(base_url('index.php/admin/data_user/'));  
        // Header('location: base_url()."pencairan/validasi_pin/".$id_data);  
        }
    public function aksi_edit_data_prodi()
      {
        $pilihan1 			       = $this->input->post('pilihan1');
        $pilihan2 			       = $this->input->post('pilihan2');

        $id = $this->uri->segment(3);
        $where = array('id' => $id);
        $update_data_user = array(
          'pilihan1' => $pilihan1,
          'pilihan2' => $pilihan2,
          
          );
        $this->m_admin->update_data($where,$update_data_user,'p_prodi');
        echo $this->session->set_flashdata('message', '<div        class="alert alert-success" role="alert">
        Data Pendaftaran Berhasil Diubah <button type= "button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            </div>');
        redirect(base_url('index.php/admin/data_pendaftaran/'));  
        // Header('location: base_url()."pencairan/validasi_pin/".$id_data);  
        }
    public function aksi_edit_data_asal_sekolah()
    {
      
        $provinsi 			         = $this->input->post('provinsi');
        $jenis_sekolah			   = $this->input->post('jenis_sekolah');
        $jurusan_sekolah 	     = $this->input->post('jurusan_sekolah');
        $kabupaten 	           = $this->input->post('kabupaten');
        $nama_sekolah 	       = $this->input->post('nama_sekolah');
        $tahun_lulus 	         = $this->input->post('tahun_lulus');
  
        $id = $this->uri->segment(3);
  
        $where = array('id' => $id);
                  
        $data_asal_sekolah = array(
        'provinsi' => $provinsi,
        'jenis_sekolah' => $jenis_sekolah,
        'jurusan_sekolah' => $jurusan_sekolah,    
        'kabupaten' => $kabupaten,    
        'nama_sekolah' => $nama_sekolah,    
        'tahun_lulus' => $tahun_lulus,    
        );
        $this->m_admin->update_data($where,$data_asal_sekolah,'data_asal_sekolah');
        echo $this->session->set_flashdata('message', '<div        class="alert alert-success" role="alert">
        Data Asal Sekolah Berhasil Diubah <button type= "button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            </div>');
        redirect(base_url('index.php/admin/data_pendaftaran/'));  
        // Header('location: base_url()."pencairan/validasi_pin/".$id_data);  
            
    }
    public function aksi_edit_data_identitas()
    {
      
      $nama_lengkap 			   = $this->input->post('nama_lengkap');
      $no_hp			           = $this->input->post('no_hp');
      $tgl_lahir 	           = $this->input->post('tgl_lahir');
      $warga 	               = $this->input->post('warga');
      $jenis_kelamin 	       = $this->input->post('jenis_kelamin');
      $email 	               = $this->input->post('email');
      $tempat_lahir 	       = $this->input->post('tempat_lahir');
      $no_ktp 	             = $this->input->post('no_ktp');
  
      $id = $this->uri->segment(3);
  
      $where = array('id' => $id);
                  
      $data_identitas = array(
      'nama_lengkap' => $nama_lengkap,
      'no_hp' => $no_hp,
      'tgl_lahir' => $tgl_lahir,    
      'warga' => $warga,    
      'jenis_kelamin' => $jenis_kelamin,    
      'email' => $email,    
      'tempat_lahir' => $tempat_lahir,    
      'no_ktp' => $no_ktp,    
        );
      
      $this->m_admin->update_data($where,$data_identitas,'data_identitas');
        echo $this->session->set_flashdata('message', '<div        class="alert alert-success" role="alert">
        Data Identitas Berhasil Diubah <button type= "button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            </div>');
        redirect(base_url('index.php/admin/data_pendaftaran/'));  
        // Header('location: base_url()."pencairan/validasi_pin/".$id_data);  
            
    }

    public function data_pendaftaran() {
          $data['session'] = $this->session->userdata();
          $data['title'] = 'Data User';
          $data['data_user'] = $this->db->get('data_identitas')->result_array();
          $data['data_asal_sekolah'] = $this->m_admin->data_identitas();
          $data['data_prodi'] = $this->m_admin->data_prodi();
          $this->load->view('template/header',$data);
          $this->load->view('template/sidebar');
          $this->load->view('admin/data_pendaftaran');
          $this->load->view('template/footer');       
        }
}
