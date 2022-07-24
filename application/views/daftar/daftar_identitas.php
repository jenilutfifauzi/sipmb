<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"></h1>



<div class="row">

    <div class="col-lg-12">

        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Pendaftaran</h6>
            </div>
            <div class="card-body">
                <p>Anda akan melakukan proses pendaftaran</p><br>
                <h5>Jalur pendaftaran anda: SBMPN -  SBMPN Gelombang 1 (Reguler)</h5>

                		<center><div class="f1-steps">
                			<div class="f1-progress">
                			    <div class="f1-progress-line" data-now-value="100" data-number-of-steps="10" style="width: 50%;"></div>
                			</div>
                            <div class="f1-step ">
                                <div class="f1-step-icon"><i class="">1</i></div>
                                <p>Jalur Pendaftaran</p>
                            </div>
                			<div class="f1-step active">
                				<div class="f1-step-icon"><i class="">2</i></div>
                				<p>Identitas Anda </p>
                			</div>
                			<div class="f1-step">
                				<div class="f1-step-icon"><i class="">3</i></div>
                				<p>Asal Sekolah</p>
                			</div>
                		    <div class="f1-step">
                				<div class="f1-step-icon"><i class="">4</i></div>
                				<p>Pilihan Program Studi</p>
                			</div>
                		</div></center>
<?php 
$query = $this->db->query('Select max(id_unit) as idbesar FROM data_identitas')->row();
$id_unit = $query->idbesar;
$urutan = (int) substr($id_unit,3,3);
$urutan++;

$huruf = "PST";
$idunit_urut = $huruf.sprintf("%03s",$urutan);


?>

                <!-- form -->
<form action="<?= base_url('index.php/daftar/aksi_daftar_identitas') ?>" method="POST">
<div class="row g-2">
<div class="col-md-6 col-sm-12">
                                
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                                    <div class="invalid-feedback" ></div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="text" name="no_hp" id="no_hp" class="form-control" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="warga">Kewarganegaraan</label>
                                    <input type="text" name="warga" id="warga" class="form-control" required>
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="hidden" name="id_unit" id="id_unit" class="form-control" required value="<?php echo $idunit_urut ?>">
                                    <div class="invalid-feedback" ></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" required>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>

                                </select>

                                <div class="invalid-feedback"></div>
                                
                                <div class="form-group">
                                    <label for="email">Alamat Email</label> 
                                    <input type="email" name="email" id="email" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label> 
                                    <input type="tempat_lahir" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
                                </div>
                                

                                <div class="form-group">
                                    <label for="no_ktp">NIK / No. KTP</label> 
                                    <input type="no_ktp" name="no_ktp" id="no_ktp" class="form-control" required>
                                </div>
                                
                                
                            </div>

</div>
<center><div class="col-3"><button type="submit" id="btn-tambah" class="btn btn-danger btn-block">Next</button></div></center>

</form>
                <!-- akhir form -->
            </div>
        </div>


    </div>

    

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->