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
                			    <div class="f1-progress-line" data-now-value="100" data-number-of-steps="10" style="width: 75%;"></div>
                			</div>
                            <div class="f1-step ">
                                <div class="f1-step-icon"><i class="">1</i></div>
                                <p>Jalur Pendaftaran</p>
                            </div>
                			<div class="f1-step ">
                				<div class="f1-step-icon"><i class="">2</i></div>
                				<p>Identitas Anda </p>
                			</div>
                			<div class="f1-step active">
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


?>


                <!-- form -->
<form action="<?= base_url('index.php/daftar/aksi_asal_sekolah') ?>" method="POST">
<div class="row g-2">
<div class="col-md-6 col-sm-12">
                                
                                <div class="form-group">
                                    <input type="hidden" name="id_unit" id="id_unit" class="form-control" value="<?= $id_unit; ?>">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Provinsi</label>
                                        <select name="provinsi" id="provinsi" class="form-control">
                                        <option value="">Pilih Provinsi</option>
                                        <?php
                                        foreach ($provinsi as $row) {
                                            echo '<option value="' . $row->id . '">' . $row->name . '</option>';
                                        }
                                        ?>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jenis Sekolah</label>
                                    <select name="jenis_sekolah" id="jenis_sekolah" class="form-control">
                                        <option value="">Pilih Jenis Sekolah</option>
                                        <option value="sma">SMA</option>
                                        <option value="smk">SMK</option>
                                        <option value="man">MAN</option>
                                        <option value="smks">SMKS</option>
                                        
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Jurusan Sekolah</label>
                                    <input type="text" name="jurusan_sekolah" id="jurusan_sekolah" class="form-control">
                                    <div class="invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <input type="hidden" name="" id="" class="form-control" value="">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <label for="kabupaten">Kabupaten / Kota</label>
                                <select name="kabupaten" id="kabupaten" class="form-control">
                                <option value="">Pilih Kabupaten</option>
                                <?php

                                ?>
                                </select>
                                
                                <div class="form-group">
                                    <label for="">NPSN / Nama Sekolah</label> 
                                    <input type="text" name="nama_sekolah" id="" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="">Tahun Lulus</label> 
                                    <select name="tahun_lulus" id="tahun_lulus" class="form-control">
                                        <option value="">Pilih Tahun Lulus</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        
                                    </select>
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