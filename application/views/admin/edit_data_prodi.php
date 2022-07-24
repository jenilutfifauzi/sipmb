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
                    <form action="<?= base_url('index.php/admin/aksi_edit_data_prodi/'.$d['id']) ?>" method="POST">
                    <div class="row g-2">
                    <div class="col-md-6 col-sm-12">
                                
                                <div class="form-group">
                                    <label for="">Pilihan 1</label>
                                    <select class="form-control" name="pilihan1" required>
                                        <option value="">Pilih ..</option>
                                        <option value="d3-si">D3 - Sistem Informasi</option>
                                        <option value="d3-agro">D3 - Agroindustri</option>
                                        <option value="d3-tppm">D3 - Teknik Perawatan dan Pemeliharaan Mesin</option>
                                        <option value="d3-akper">D3 - Keperawatan</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="pilihan2">Pilihan 2</label>
                                    <select class="form-control" name="pilihan2" required>
                                        <option value="">Pilih ..</option>
                                        <option value="d3-si">D3 - Sistem Informasi</option>
                                        <option value="d3-agro">D3 - Agroindustri</option>
                                        <option value="d3-tppm">D3 - Teknik Perawatan dan Pemeliharaan Mesin</option>
                                        <option value="d3-akper">D3 - Keperawatan</option>

                                    </select>
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