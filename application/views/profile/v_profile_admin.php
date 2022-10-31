   <div class="container-xxl">
       <br>
       <h2 class="dahsboard-text mt-2 text-center">Data BLUD</h2>
       <div class="square mt-3"></div>

       <div class="col-md-12">
           <div class="card card-primary mt-4">
               <div class="card-header">


                   <div class="card-tools">
                       <div class="text-right">
                           <a href="<?= base_url('adminprofile/add') ?>" type="button" class="btn btn-primary text-right" id="submit">
                               Tambah Data</a>
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
                                   <td> <?= $getProfile->nama_blud ?></td>

                                   <td> <a class="btn btn-info btn-sm" href="<?= base_url('adminprofile/pilihandata/' . $getProfile->id) ?> "><i class="fas fa-eye"></i> Detail</a>

                                       <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete<?= $getProfile->id ?>"><i class="fas fa-trash"></i> Delete</button>

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
                           <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                       </div>
                       <div class="modal-body">
                           <h5>Apakah Anda Yakin Untuk Menghapus Data ini?</h5>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">
                               Close
                           </button>
                           <a href="<?= base_url('adminprofile/delete/' . $value->id) ?>" class="btn btn-primary">Delete</a>
                       </div>
                   </div>
               </div>
           </div>
       <?php } ?>

   </div>
   </div>
   </div>
   <script>
       $(document).ready(function() {
           $('.selectpick select').selectpicker();
       })
   </script>