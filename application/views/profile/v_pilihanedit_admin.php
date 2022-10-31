   <div class="container-xxl">
       <br>

       <div class="square mt-3"></div>

       <div class="col-md-12">
           <div class="card card-primary mt-4">
               <div class="card-header">
                   <h3 class="card-title text-center"> <?= $data->nama_blud ?></h3>


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
                               <th>Pilihan</th>

                               <th>Action</th>

                           </tr>
                       </thead>
                       <tbody>


                           <tr>
                               <td>UMUM</td>
                               <td><a class="btn btn-warning btn-sm" href="<?= base_url('data/umum/edit/' . $data->id) ?> "><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
                           </tr>
                           <tr>
                               <td>LOGO</td>
                               <td><a class="btn btn-warning btn-sm" href="<?= base_url('data/logo/edit/' . $data->id) ?> "><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
                           </tr>
                           <tr>
                               <td>INFORMASI UMUM</td>
                               <td><a class="btn btn-warning btn-sm" href="<?= base_url('data/informasi/edit/' . $data->id) ?> "><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
                           </tr>

                           <tr>
                               <td>ORGANISASI</td>
                               <td><a class="btn btn-warning btn-sm" href="<?= base_url('data/organisasi/edit/' . $data->id) ?> "><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
                           </tr>

                           <tr>
                               <td>STRUKTUR ORGANISASI</td>
                               <td><a class="btn btn-warning btn-sm" href="<?= base_url('data/sorganisasi/edit/' . $data->id) ?> "><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
                           </tr>

                           <tr>
                               <td>REGULASI</td>
                               <td><a class="btn btn-warning btn-sm" href="<?= base_url('data/regulasi/edit/' . $data->id) ?> "><i class="fa-solid fa-pen-to-square"></i> Edit</a></td>
                           </tr>


                       </tbody>
                   </table>
               </div>
           </div>
           <div class="text-end">
               <a href="<?= base_url('adminprofile') ?>" class="btn btn-outline-primary mt-3 mb-3">Kembali</a>
           </div>
       </div>



   </div>
   </div>
   </div>
   <script>
       $(document).ready(function() {
           $('.selectpick select').selectpicker();
       })
   </script>