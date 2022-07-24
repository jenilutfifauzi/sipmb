<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
    public function __construct()
    {
      parent::__construct();
      // load session library
      $this->load->library('session');
      $this->load->library('form_validation');
      $this->load->helper('url');
      $this->load->model(array('usermodel','m_daftar'));
     
    }

    public function index() {
      if ($this->input->post('finish')) {
          $this->form_validation->set_rules('name', 'Full Name', 'trim|required');
          $this->form_validation->set_rules('password', 'Password', 'trim|required');
          $this->form_validation->set_rules('email', 'Email Address', 'trim|required');
          $this->form_validation->set_rules('phone', 'Phone No.', 'trim|required');
          $this->form_validation->set_rules('gender', 'Gender', 'trim|required');
          $this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
          $this->form_validation->set_rules('address', 'Contact Address', 'trim|required');

          if ($this->form_validation->run() !== FALSE) {
              $result = $this->usermodel->insert_user($this->input->post('name'), $this->input->post('password'), $this->input->post('email'), $this->input->post('phone'), $this->input->post('gender'), $this->input->post('dob'), $this->input->post('address'), $this->input->post('kabupaten'));
              $data['success'] = $result;
              $this->load->view('daftar/daftar', $data);
          } else {
              $this->load->view('daftar/daftar');
          }
      } else {
          $this->load->view('daftar/daftar');
      }
    }


    public function kirimemail()
    {                
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com', // atau smptp lainnya                
            'smtp_user' => 'mimambaululum18@gmail.com',  // Email gmail admin aplikasi
            'smtp_pass'   => 'siyvxcjlvquhhjwk',  // Password Gmail atau Sandi Aplikasi Gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];        
        $this->load->library('email', $config); // panggil library email
        $this->email->from('lutfifauzi1801@gmail.com','SIPMB Verifikasi Email');
        $this->email->to('jenlut.jl@gmail.com');            
        $this->email->subject('Email Notifikasi');
        $this->email->message('Halo ini adalah ini adalah email test');
        if($this->email->send()){
            echo 'Sukses, email berhasil dikirimkan, coba deh cek email kamu ada surat cinta dari aku :)';
        }else{
            echo 'Error, Gagal melakukan kirim email, cek koneksi jaringan dan lainnya.';
        }
    }

      //reques data provinsi
      //request data kabupaten berdasarkan id provinsi yang dipilih
     public function get_kabupaten()
      {
          if ($this->input->post('provinsi_id')) {
              echo $this->m_daftar->get_kabupaten($this->input->post('provinsi_id'));
          }
      }

      //request data kecamatan berdasarkan id kabupaten yang dipilih
      public function get_kecamatan()
      {
          if ($this->input->post('kabupaten_id')) {
              echo $this->m_daftar->get_kecamatan($this->input->post('kabupaten_id'));
          }
      }

      //request data desa berdasarkan id kecamatan yang dipilih
      public function get_desa()
      {
          if ($this->input->post('kecamatan_id')) {
              echo $this->m_daftar->get_desa($this->input->post('kecamatan_id'));
          }
      }


    public function jalur_seleksi()
    {
      $this->load->view('template/header_daftar');
      $this->load->view('template/navbar_daftar');
  
      $this->load->view('daftar/seleksi');
      $this->load->view('template/footer');
    
    }

    public function daftar_identitas()
    {
      $this->load->view('template/header_daftar');
      $this->load->view('template/navbar_daftar');
      $this->load->view('daftar/daftar_identitas');
      $this->load->view('template/footer');
    
    }

    public function aksi_daftar_identitas()
    {
      $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
    
      

      $id 			             = '';
      $id_unit 			   = $this->input->post('id_unit');
      $nama_lengkap 			   = $this->input->post('nama_lengkap');
      $no_hp			           = $this->input->post('no_hp');
      $tgl_lahir 	           = $this->input->post('tgl_lahir');
      $warga 	               = $this->input->post('warga');
      $jenis_kelamin 	       = $this->input->post('jenis_kelamin');
      $email 	               = $this->input->post('email');
      $tempat_lahir 	       = $this->input->post('tempat_lahir');
      $no_ktp 	             = $this->input->post('no_ktp');
                

      $tgl = strtotime($tgl_lahir);
      $password1 = idate('Y',$tgl);
      $password2 = idate('m',$tgl);
      $password3 = idate('d',$tgl);
      $pass = $password1.$password2.$password3;

      $data_identitas = array(
      'id' => $id,
      'id_unit' => $id_unit,
      'nama_lengkap' => $nama_lengkap,
      'no_hp' => $no_hp,
      'tgl_lahir' => $tgl_lahir,    
      'warga' => $warga,    
      'jenis_kelamin' => $jenis_kelamin,    
      'email' => $email,    
      'tempat_lahir' => $tempat_lahir,    
      'no_ktp' => $no_ktp,    
      'pass' => $pass,    
      );
      $this->m_daftar->insert_data('data_identitas',$data_identitas);

      

      echo $this->session->set_flashdata('message', '<div        class="alert alert-success" role="alert">
      Data Dukung Berhasil Ditambahkan <button type= "button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
          </div>');
      redirect(base_url('index.php/daftar/asal_sekolah/'.$id));  
      // Header('location: base_url()."pencairan/validasi_pin/".$id_data);  
      }

      public function asal_sekolah()
      {
        $data['provinsi'] = $this->m_daftar->get_provinsi();
        $this->load->view('template/header_daftar');
        $this->load->view('template/navbar_daftar');
        $this->load->view('daftar/asal_sekolah',$data);
        $this->load->view('template/footer');
      }

      public function aksi_asal_sekolah()
    {
    
      $id 			             = $this->input->post('id_unit');

      $id_data 			         = $this->input->post('provinsi');
      $where                 = array('id' => $id_data);
      $data_pro              = $this->m_daftar->edit_data($where,'provinces')->row();
      $provinsi              = $data_pro->name;

      $jenis_sekolah			   = $this->input->post('jenis_sekolah');
      $jurusan_sekolah 	     = $this->input->post('jurusan_sekolah');

      $id_data2 	           = $this->input->post('kabupaten');
      $where                 = array('id' => $id_data2);
      $data_pro              = $this->m_daftar->edit_data($where,'regencies')->row();
      $kabupaten              = $data_pro->name;

      $nama_sekolah 	       = $this->input->post('nama_sekolah');
      $tahun_lulus 	         = $this->input->post('tahun_lulus');

                
      $data_asal_sekolah = array(
      'id' =>'',
      'id_unit' => $id,
      'provinsi' => $provinsi,
      'jenis_sekolah' => $jenis_sekolah,
      'jurusan_sekolah' => $jurusan_sekolah,    
      'kabupaten' => $kabupaten,    
      'nama_sekolah' => $nama_sekolah,    
      'tahun_lulus' => $tahun_lulus,    
      );
      $this->m_daftar->insert_data('data_asal_sekolah',$data_asal_sekolah);
      echo $this->session->set_flashdata('message', '<div        class="alert alert-success" role="alert">
      Data Dukung Berhasil Ditambahkan <button type= "button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
          </div>');
      redirect(base_url('index.php/daftar/program_studi/'.$id_data.''));  
      // Header('location: base_url()."pencairan/validasi_pin/".$id_data);  
      }

      public function program_studi()
      {
        $this->load->view('template/header_daftar');
        $this->load->view('template/navbar_daftar');
        $this->load->view('daftar/program_studi');
        $this->load->view('template/footer');
      }
      public function aksi_program_studi()
      {
      
        $id_unit 			          = $this->input->post('id_unit');
        $pilihan1 			       = $this->input->post('prodi1');
        $pilihan2 			       = $this->input->post('prodi2');


        $username 			       = $this->input->post('username');
        $name 			       = $this->input->post('name');
        $pass_mentah 			     = $this->input->post('password');
        $password              =  password_hash($pass_mentah, PASSWORD_DEFAULT);
        
        
                  
        $data = array(
        'id' =>'',
        'id_unit' => $id_unit,
        'pilihan1' => $pilihan1,
        'pilihan2' => $pilihan2,
            
        );

        $token = bin2hex(random_bytes(24));
        $data_user = array(
          'id' => '',
          'id_unit' => $id_unit,
          'username' => $username,
          'name' => $name,
          'password' => $password,
          'role'  => 'user',
          'is_aktif'  => 0,
          'token'  => $token,
          );
        $this->m_daftar->insert_data('p_prodi',$data);
        $this->m_daftar->insert_data('user',$data_user);
        echo $this->session->set_flashdata('message', '<div        class="alert alert-success" role="alert">
        Akun Berhasil Ditambahkan <button type= "button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
            </div>');
        redirect(base_url('index.php/daftar/generate_user/'));  
        // Header('location: base_url()."pencairan/validasi_pin/".$id_data);  
        }
        public function generate_user()
        {
          
          //email

          $query = $this->db->query('Select max(id) as id FROM user ')->row();
          $id = $query->id;

          $hasil= $this->db->where('id',$id)->get('user')->row();
          //
          $query2 = $this->db->query('Select max(id) as id FROM data_identitas ')->row();
          $id2 = $query2->id;

          $hasil2= $this->db->where('id',$id2)->get('data_identitas')->row();

          $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com', // atau smptp lainnya                
            'smtp_user' => 'mimambaululum18@gmail.com',  // Email gmail admin aplikasi
            'smtp_pass'   => 'siyvxcjlvquhhjwk',  // Password Gmail atau Sandi Aplikasi Gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
            ];        
            $this->load->library('email', $config); // panggil library email
            $this->email->from('lutfifauzi1801@gmail.com','SIPMB Verifikasi Email');
            $this->email->to($hasil2->email);            
            $this->email->subject('Email Notifikasi');
            $this->email->message('Untuk bisa login ke akun anda, haraf aktivasi akun terlebih dahulu, silahkan'.'<a href="https://localhost/sipmb/index.php/daftar/aktivasi_akun/'.$hasil->token.'"> Klik disini</a>');
            if($this->email->send()){
                echo 'Sukses, email berhasil dikirimkan';
            }else{
                echo 'Error, Gagal melakukan kirim email, cek koneksi jaringan dan lainnya.';
            }
          //akhir email

          $this->load->view('template/header');
          $this->load->view('template/navbar_daftar');
          $this->load->view('daftar/kartu');
          $this->load->view('template/footer');
        }

    
  public function aktivasi_akun()
  {
    $token = $this->uri->segment(3);
    $where = array(
      'token' => $token
    );
    $update = array(
      'is_aktif' => 1
    );
    $this->m_daftar->update_data($where,$update,'user');
    echo $this->session->set_flashdata('message', '<div        class="alert alert-success" role="alert">
    Akun Anda Berhasil Diaktivasi, silahkan login <button type= "button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button>
    </div>');
    redirect('login');
  }

}