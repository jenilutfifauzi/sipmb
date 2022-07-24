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
               

                		            <!-- form -->
                    <form action="<?= base_url('index.php/admin/aksi_tambah_user') ?>" method="POST">
                    <div class="row g-2">
                    <div class="col-md-6 col-sm-12">
                                                    
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" required>
                                    <div class="invalid-feedback" ></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
                                    <div class="invalid-feedback" ></div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required>
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="hidden" name="id_unit" id="id_unit" class="form-control" 
                                    <div class="invalid-feedback" ></div>
                                </div>
                            </div>

                           
                            <center><div class="col-3"><button type="submit" id="btn-tambah" class="btn btn-danger btn-block">Simpan</button></div></center>
                           
                              
                    </div>

                    </form>
                <!-- akhir form -->
            </div>
        </div>
    </div>
</div>0

    </div>

    

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->