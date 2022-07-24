<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"></h1>



<div class="row">

    <div class="col-lg-12">

        <!-- Circle Buttons -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit user</h6>
            </div>
            <div class="card-body">
            <button type="button" class="btn btn-info" onclick="goBack()"><a><i class="fas fa-undo"></i> Kembali</a><br></button>

                    <?php 

                    foreach($data_user as $d) :

                    ?>            
                		            <!-- form -->
                    <form action="<?= base_url('index.php/admin/aksi_edit_data_asal_sekolah/'.$d['id']) ?>" method="POST">
                    <div class="row g-2">
                    <div class="col-md-6 col-sm-12">
                                
                                <div class="form-group">
                                    <label for="">Provinsi</label>
                                    <input type="text" name="provinsi" id="provinsi" class="form-control" value="<?= $d['provinsi'] ?>">
                                    <div class="invalid-feedback" ></div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="jenis_sekolah">Jenis Sekolah</label>
                                    <input type="text" name="jenis_sekolah" id="jenis_sekolah" class="form-control" value="<?= $d['jenis_sekolah'] ?>">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan_sekolah">Jurusan Sekolah</label>
                                    <input type="text" name="jurusan_sekolah" id="jurusan_sekolah" class="form-control" value="<?= $d['jurusan_sekolah'] ?>">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten">Kabupaten</label>
                                    <input type="text" name="kabupaten" id="kabupaten" class="form-control" value="<?= $d['kabupaten'] ?>">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_sekolah">Nama Sekolah</label>
                                    <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control" value="<?= $d['nama_sekolah'] ?>">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="tahun_lulus">Tahun Lulus</label>
                                    <input type="text" name="tahun_lulus" id="tahun_lulus" class="form-control" value="<?= $d['tahun_lulus'] ?>">
                                    <div class="invalid-feedback"></div>
                                </div>
                                
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="hidden" name="id_unit" id="id_unit" class="form-control"> 
                                    <div class="invalid-feedback" ></div>
                                </div>
                                <button type="submit" id="btn-tambah" class="btn btn-primary btn-block fas fa-plus col-12">Simpan</button>
                            </div>
                            <?php endforeach; ?>


                    </div>

                    </form>
                <!-- akhir form -->
            </div>
        </div>
    </div>
</div>

    </div>

    

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->