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
                			    <div class="f1-progress-line" data-now-value="100" data-number-of-steps="10" style="width: 100%;"></div>
                			</div>
                            <div class="f1-step ">
                                <div class="f1-step-icon"><i class="">1</i></div>
                                <p>Jalur Pendaftaran</p>
                            </div>
                			<div class="f1-step ">
                				<div class="f1-step-icon"><i class="">2</i></div>
                				<p>Identitas Anda </p>
                			</div>
                			<div class="f1-step ">
                				<div class="f1-step-icon"><i class="">3</i></div>
                				<p>Asal Sekolah</p>
                			</div>
                		    <div class="f1-step active">
                				<div class="f1-step-icon"><i class="">4</i></div>
                				<p>Pilihan Program Studi</p>
                			</div>
                		</div></center>

                        <?php 
$query = $this->db->query('Select max(id_unit) as idbesar FROM data_identitas')->row();
$id_unit = $query->idbesar;

$hasil= $this->db->where('id_unit',$id_unit)->get('data_identitas')->row();
$username = bin2hex(random_bytes(5));
$name = $hasil->nama_lengkap;
$tgl = strtotime($hasil->tgl_lahir);
$password1 = idate('Y',$tgl);
$password2 = idate('m',$tgl);
$password3 = idate('d',$tgl);
$password = $password1.$password2.$password3;

?>


                <!-- form -->
<form action="<?= base_url('index.php/daftar/aksi_program_studi') ?>" method="POST">
<div class="row g-2">
<div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="hidden" name="name" id="name" class="form-control" value="<?= $name; ?>">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="username" id="username" class="form-control" value="<?= $username; ?>">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="password" id="password" class="form-control" value="<?= $password; ?>">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" name="id_unit" id="id_unit" class="form-control" value="<?= $id_unit; ?>">
                                    <div class="invalid-feedback"></div>
                                </div>

                                <label for="prodi1">Pilih Prodi 1</label>
                                <select class="form-control" name="prodi1" required>
                                    <option value="">Pilih ..</option>
                                    <option value="d3-si">D3 - Sistem Informasi</option>
                                    <option value="d3-agro">D3 - Agroindustri</option>
                                    <option value="d3-tppm">D3 - Teknik Perawatan dan Pemeliharaan Mesin</option>
                                    <option value="d3-akper">D3 - Keperawatan</option>

                                </select>    
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="hidden" name="" id="" class="form-control" value="">
                                    <div class="invalid-feedback"></div>
                                </div>


                                <label for="prodi1">Pilih Prodi 2</label>
                                <select class="form-control" name="prodi2" required>
                                    <option value="">Pilih ..</option>
                                    <option value="d3-si">D3 - Sistem Informasi</option>
                                    <option value="d3-agro">D3 - Agroindustri</option>
                                    <option value="d3-tppm">D3 - Teknik Perawatan dan Pemeliharaan Mesin</option>
                                    <option value="d3-akper">D3 - Keperawatan</option>

                                </select>                                    
                         </div>

</div><br>
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