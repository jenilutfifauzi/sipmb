            <div class="card">
              <div class="card-body">
              <?= $this->session->flashdata('message');?>
            <h2>Data Identitas</h2>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table id="test" class="table table-striped table-bordered"  style="width:100%">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>No Hp</th>
                          <th>Tanggal lahir</th>
                          <th>Warga</th>
                          <th>Jenis Kelamin</th>
                          <th>Email</th>
                          <th>Tempat lahir</th>
                          <th>No KTP</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no=1;
	                    foreach ($data_user as $users) : ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $users['nama_lengkap'] ?></td>
                          <td><?= $users['no_hp'] ?></td>
                          <td><?= $users['tgl_lahir'] ?></td>
                          <td><?= $users['warga'] ?></td>
                          <td><?= $users['jenis_kelamin'] ?></td>
                          <td><?= $users['email'] ?></td>
                          <td><?= $users['tempat_lahir'] ?></td>
                          <td><?= $users['no_ktp'] ?></td>
                          
                          <!-- <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Edit
                            </button>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Hapus
                            </button>
                          </td> -->

                          <td>
                          <a href="<?php echo base_url(); ?>index.php/admin/edit_data_identitas/<?php echo $users['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                          <a href="<?php echo base_url(); ?>index.php/admin/delete_data_identitas/<?php echo $users['id']; ?>" class="btn btn-danger "> <i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                      <!-- Button trigger modal -->
<!--                       
                      <a href="<?php echo base_url(); ?>index.php/admin/tambah_user" class="btn btn-primary" onclick="Apakah ingin menghapus data?"><i class="fas fa-plus"></i> Tambah</a> -->
                      
                    </div>
                  </div>
                </div>
              </div>
         
     

              <div class="card">
              <div class="card-body">
            <h2>Asal Sekolah</h2>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table id="test" class="table table-striped table-bordered"  style="width:100%">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Provinsi</th>
                          <th>Jenis Sekolah</th>
                          <th>Jurusan Sekolah</th>
                          <th>Kabupaten</th>
                          <th>Nama Sekolah</th>
                          <th>Tahun Lulus</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no=1;
	                    foreach ($data_asal_sekolah as $users) : ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $users['nama_lengkap'] ?></td>
                          <td><?= $users['provinsi'] ?></td>
                          <td><?= $users['jenis_sekolah'] ?></td>
                          <td><?= $users['jurusan_sekolah'] ?></td>
                          <td><?= $users['kabupaten'] ?></td>
                          <td><?= $users['nama_sekolah'] ?></td>
                          <td><?= $users['tahun_lulus'] ?></td>
                          
                          <!-- <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Edit
                            </button>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Hapus
                            </button>
                          </td> -->

                          <td>
                          <a href="<?php echo base_url(); ?>index.php/admin/edit_data_asal_sekolah/<?php echo $users['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                          <a href="<?php echo base_url(); ?>index.php/admin/delete_data_asal_sekolah/<?php echo $users['id']; ?>" class="btn btn-danger "> <i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                      <!-- Button trigger modal -->
                      
                      <!-- <a href="<?php echo base_url(); ?>index.php/admin/tambah_user" class="btn btn-primary" onclick="Apakah ingin menghapus data?"><i class="fas fa-plus"></i> Tambah</a> -->
                      
                    </div>
                  </div>
                </div>
              </div>
         
     


              <div class="card">
              <div class="card-body">
            <h2>Data Prodi</h2>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table id="test" class="table table-striped table-bordered"  style="width:100%">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Pilihan 1</th>
                          <th>Pilihan 2</th>
                          
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no=1;
	                    foreach ($data_prodi as $users) : ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $users['nama_lengkap'] ?></td>
                          <td><?= $users['pilihan1'] ?></td>
                          <td><?= $users['pilihan2'] ?></td>

                          
                          <!-- <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Edit
                            </button>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Hapus
                            </button>
                          </td> -->

                          <td>
                          <a href="<?php echo base_url(); ?>index.php/admin/edit_prodi/<?php echo $users['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                          <a href="<?php echo base_url(); ?>index.php/admin/delete_prodi/<?php echo $users['id']; ?>" class="btn btn-danger "> <i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                      <!-- Button trigger modal -->
                      
                      <!-- <a href="<?php echo base_url(); ?>index.php/admin/tambah_user" class="btn btn-primary" onclick="Apakah ingin menghapus data?"><i class="fas fa-plus"></i> Tambah</a> -->
                      
                    </div>
                  </div>
                </div>
              </div>
         
     


