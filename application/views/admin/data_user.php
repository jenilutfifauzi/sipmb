            <div class="card">
              <div class="card-body">
              <?= $this->session->flashdata('message');?>
               
           
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table id="test" class="table table-striped table-bordered"  style="width:100%">
                        <thead>
                        <tr>
                          <th>No</th>
                          <th>Username</th>
                          <th>Name</th>
                          <th>Password</th>
                          <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php 
                        $no=1;
	                    foreach ($data_user as $users) : ?>
                        <tr>
                          <td><?= $no++ ?></td>
                          <td><?= $users['username'] ?></td>
                          <td><?= $users['name'] ?></td>
                          <td><?= $users['password'] ?></td>
                          
                          <!-- <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Edit
                            </button>

                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Hapus
                            </button>
                          </td> -->

                          <td>
                          <a href="<?php echo base_url(); ?>index.php/admin/edit_user/<?php echo $users['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                          <a href="<?php echo base_url(); ?>index.php/admin/delete_user/<?php echo $users['id']; ?>" class="btn btn-danger "> <i class="fas fa-trash"></i></a>
                          </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                      </table>
                      <!-- Button trigger modal -->
                      
                      <a href="<?php echo base_url(); ?>index.php/admin/tambah_user" class="btn btn-primary" onclick="Apakah ingin menghapus data?"><i class="fas fa-plus"></i> Tambah</a>
                      
                    </div>
                  </div>
                </div>
              </div>
         
     

