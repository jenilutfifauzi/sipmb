<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('login2/') ?>fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?= base_url('login2/') ?>css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('login2/') ?>css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?= base_url('login2/') ?>css/style.css">

    <title>Login SIPMB</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="<?= base_url('login2/') ?>images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Login <strong>SIPMB</strong></h3>
              <h4><?= $this->session->flashdata('message');?></h4>
              <p class="mb-4">Sistem informasi penerimaan mahasiswa baru.</p>
            </div>
            <form action="<?= base_url('index.php/Login/auth') ?>" method="post">
              <div class="form-group first">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
                
              </div>
              
            <small>Belum punya akun? klik <a href="<?= base_url('index.php/daftar/jalur_seleksi') ?>" >daftar disini</a></small> <br>             
              <input type="submit" value="Log In" class="btn text-white btn-block btn-primary">

            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="<?= base_url('login2/') ?>js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url('login2/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('login2/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('login2/') ?>js/main.js"></script>
  </body>
</html>