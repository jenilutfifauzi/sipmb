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
                    <form action="<?= base_url('index.php/admin/aksi_edit_data_identitas/'.$d['id']) ?>" method="POST">
                    <div class="row g-2">
                    <div class="col-md-6 col-sm-12">
                                
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $d['nama_lengkap'] ?>">
                                    <div class="invalid-feedback" ></div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?= $d['no_hp'] ?>">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_lahir">Tanggal Lahir</label>
                                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?= $d['tgl_lahir'] ?>">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="warga">Warga Negara</label>
                                    <input type="text" name="warga" id="warga" class="form-control" value="<?= $d['warga'] ?>">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="form-control" name="jenis_kelamin" required>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>

                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="<?= $d['email'] ?>">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="<?= $d['tempat_lahir'] ?>">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for="no_ktp">No KTP</label>
                                    <input type="text" name="no_ktp" id="no_ktp" class="form-control" value="<?= $d['no_ktp'] ?>">
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