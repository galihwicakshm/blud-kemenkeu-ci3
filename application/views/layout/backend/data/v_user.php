   <div class="container-xxl">
       <br>
       <h2 class="dahsboard-text mt-2 text-center">Data User BLUD</h2>
       <div class="square mt-3"></div>

       <div class="col-md-12">
           <div class="card card-primary mt-4">
               <div class="card-header">

                   <div class="card-tools">
                       <div class="text-right">
                           <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add"></i> Tambah Data</button>
                       </div>
                   </div>

                   <!-- /.card-tools -->
               </div>
               <!-- /.card-header -->
               <div class="card-body">

                   <?php
                    if ($this->session->flashdata('pesan')) {
                        echo ' <div class="alert alert-success alert-dismissible" role="alert">
                   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   ';
                        echo $this->session->flashdata('pesan');
                        echo '</div>';
                    }
                    ?>
                   <table class="table table-striped ">
                       <thead>
                           <tr>
                               <th>No</th>
                               <th>Kode BLUD</th>
                               <th>Nama BLUD</th>
                               <th>Action</th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php
                            $i = 1;
                            foreach ($dataProfile as $key => $getProfile) { ?>

                               <tr>
                                   <th scope="row"><?= $i++ ?></th>
                                   <td> <?= $getProfile->kode_blud ?></td>
                                   <td> <?= $getProfile->nama ?></td>

                                   <td> <a class="btn btn-warning btn-sm text-white" data-bs-toggle="modal" data-bs-target="#edit<?= $getProfile->id ?>"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
                                       <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#delete<?= $getProfile->id ?>"><i class="fas fa-trash"></i> Delete</button>
                                   </td>
                               </tr>
                           <?php } ?>
                       </tbody>
                   </table>
               </div>
           </div>
       </div>


       <?php foreach ($dataProfile as $key => $value) { ?>
           <div class="modal fade" id="delete<?= $value->id ?>" tabindex="-1" aria-hidden="true">
               <div class="modal-dialog" role="document">
                   <div class="modal-content">
                       <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel1"><?= $value->kode_blud ?></h5>
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                       </div>
                       <div class="modal-body">
                           <h5>Apakah Anda Yakin Untuk Menghapus Data ini?</h5>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                               Close
                           </button>
                           <a href="<?= base_url('adminuser/delete/' . $value->id) ?>" class="btn btn-primary">Delete</a>
                       </div>
                   </div>
               </div>
           </div>
       <?php } ?>

   </div>
   </div>
   </div>




   <div class="modal fade" id="add" tabindex="-1" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="exampleModalLabel1">Tambah Data User</h5>
                   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">

                   <?php echo form_open('adminuser/add'); ?>
                   <div class="col-12">
                       <label for="emailBasic" class="form-label">Kode BLUD</label>
                       <input type="text" name="kode_blud" id="emailBasic" class="form-control" placeholder="Kode BLUD" />
                   </div>
                   <div class="col-12">
                       <label for="nameBasic" class="form-label">Nama BLUD</label>
                       <input type="text" name="nama" id="nameBasic" class="form-control" placeholder="Nama BLUD" v />
                   </div>
                   <div class="col-12">
                       <label for="dobBasic" class="form-label">Password</label>
                       <input type="password" name="password" id="dobBasic" class="form-control" placeholder="Password" />
                   </div>

               </div>
               <div class=" modal-footer">
                   <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                       Close
                   </button>
                   <button type="submit" class="btn btn-primary">Save changes</button>
                   <?php
                    echo form_close();
                    ?>
               </div>
           </div>
       </div>
   </div>
   </div>
   </div>


   <?php foreach ($dataProfile  as $key => $value) { ?>

       <div class="modal fade" id="edit<?= $value->id ?>" tabindex="-1" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="exampleModalLabel1">Edit Data User</h5>
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                   </div>
                   <div class="modal-body">
                       <?php echo form_open('adminuser/edit/' . $value->kode_blud); ?>

                       <div class="col-12">
                           <label for="emailBasic" class="form-label">Kode BLUD</label>
                           <input type="text" name="kode_blud" id="emailBasic" class="form-control" placeholder="Kode BLUD" value="<?= $value->kode_blud ?>" readonly />
                       </div>
                       <div class="col-12">
                           <label for="nameBasic" class="form-label">Nama BLUD</label>
                           <input type="text" name="nama" id="nameBasic" class="form-control" placeholder="Nama BLUD" value="<?= $value->nama ?>" />
                       </div>
                       <div class="col-12">
                           <label for="dobBasic" class="form-label">Password</label>
                           <input type="password" name="password" id="dobBasic" class="form-control" placeholder="Password" value="<?= $value->password ?>" />
                       </div>

                   </div>
                   <div class=" modal-footer">
                       <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                           Close
                       </button>
                       <button type="submit" class="btn btn-primary">Save changes</button>
                       <?php
                        echo form_close();
                        ?>
                   </div>
               </div>
           </div>
       </div>
   <?php } ?>