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
            <a href="<?php echo base_url(); ?>index.php/admin/data_user" class="btn btn-info"><i class="fas fa-undo"></i> Kembali</a><br>

                    <?php 

                    foreach($data_user as $d) :

                    ?>            
                		            <!-- form -->
                    <form action="<?= base_url('index.php/admin/aksi_edit_user/'.$d['id']) ?>" method="POST">
                    <div class="row g-2">
                    <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" name="username" id="username" class="form-control" value="<?= $d['username'] ?>">
                                    <div class="invalid-feedback" ></div>
                                </div>
                                <div class="form-group">
                                    <label for="">Nama Lengkap</label>
                                    <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="<?= $d['name'] ?>">
                                    <div class="invalid-feedback" ></div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" value="<?= $d['password'] ?>">
                                    <div class="invalid-feedback"></div>
                                </div>
                                <div class="form-group">
                                    <label for=""></label>
                                    <input type="hidden" name="id_unit" id="id_unit" class="form-control" 
                                    <div class="invalid-feedback" ></div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                            <center>
                            <button type="submit" id="btn-tambah" class="btn btn-primary btn-block fas fa-plus">Simpan</button></center>

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