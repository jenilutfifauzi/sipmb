<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"></h1>

<?php 
$query = $this->db->query('Select max(id) as id FROM user ')->row();
$id = $query->id;

$hasil= $this->db->where('id',$id)->get('user')->row();
//
$query2 = $this->db->query('Select max(id) as id FROM data_identitas ')->row();
$id2 = $query2->id;

$hasil2= $this->db->where('id',$id2)->get('data_identitas')->row();


?>
<center><div class="lg-col-6">
<div class="card mb-4 py-3 border-bottom-primary">
    <div class="card-body">
        <i class="fas fa-address-card" width="100%"></i>
      
        <h3>Akun Peserta</h3>
        <small>Simpan dengan baik data dibawah ini:</small><br>
        <br><br><h4>Username: <?php echo $hasil->username; ?></h4>
        <!-- <h4>Password : <?php echo ($hasil2->pass); ?></h4> -->


        <!-- <a href="#" class="btn btn-info btn-icon-split">
            <span class="icon text-white-70">
            <i class="fas fa-info-circle">Username</i>
            </span>
            <span class="text"> <?php echo $hasil->username; ?></span>
        </a><br><br> -->
        <a href="#" class="btn btn-warning btn-icon-split">
            <span class="icon text-white-70">
            <i class="fas fa-info-circle">Password</i>
            </span>
            <span class="text"> <?php echo $hasil2->pass; ?></span>
        </a>

    </div>
</div>
</div>
<small>Silahkan Login? klik <a href="<?= base_url('index.php/login') ?>" >disini</a></small>
</center>

</div>