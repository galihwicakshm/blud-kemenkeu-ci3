   <?php
    //notif form kosong
    echo validation_errors('<div class="alert alert-danger alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <h5><i class="icon fas fa-ban"></i>', '</h5></div>');

    //notif gagal upload
    if (isset($error_upload)) {
        echo '<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <h5><i class="icon fas fa-ban"></i>' . $error_upload . '</h5></div>';
    }
    echo form_open_multipart('data/umum/edit/' . $data->id) ?>
   <div class="col-md-12 mt-4 container">
       <div class="card h-100">
           <div class="card-header bg-secondary">
               <strong>UTAMA</strong>
           </div>
           <div class="card-body mt-3">
               <div class="col-md-12">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="form-group">
                               <label for="exampleInputEmail1">Jumlah SDM</label>
                               <textarea name="jumlahsdm" class=" form-control" id="exampleFormControlTextarea1" rows="3" value=""><?= $data->jumlahsdm ?></textarea>


                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="exampleInputEmail1">Jabatan</label>
                               <textarea name="jabatan" class=" form-control" id="exampleFormControlTextarea1" rows="3" value=""><?= $data->jabatan ?></textarea>


                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="exampleInputEmail1">Umur</label>
                               <textarea name="umur" class=" form-control" id="exampleFormControlTextarea1" rows="3" value="<?= $data->umur ?>"><?= $data->umur ?></textarea>


                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="exampleInputEmail1">Pendidikan</label>
                               <textarea name="pendidikan" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $data->pendidikan ?></textarea>


                           </div>
                       </div>
                       <div class="col-md-6">
                           <div class="form-group">
                               <label for="exampleInputEmail1">Peraturan</label>
                               <textarea name="profilperaturan" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $data->profilperaturan ?></textarea>


                           </div>
                       </div>
                       <div class="form-group">
                           <label for="">Profil</label>
                           <center> <img class="img-thumbnail" src="<?= base_url('assets/img/' . $data->foto) ?>" id="load_gambar" width="400px" height="320px"></center>
                       </div>

                       <div class="form-group ">
                           <div class="custom-file">
                               <label for="formFile">(Max 2MB)</label>
                               <input class="form-control" name="foto" type="file" id="preview_gambar" />
                           </div>
                           <!-- <label>Upload Gambar(Max 2MB) : </label>
                  <input class="custom-file-input" type="file" name="gambar" id="preview_gambar" width="400px"> -->
                       </div>

                   </div>
               </div>
           </div>


       </div>
       <div class="text-right">
           <button type="submit" class="btn btn-success mt-3 mb-3">Simpan</button>
           <a href="<?= base_url('adminprofile/pilihandata/' . $data->id) ?>" class="btn btn-outline-primary mt-3 mb-3">Kembali</a>
       </div>
       <?php echo form_close() ?>

   </div>

   <script>
       function bacaGambar(input) {
           if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                   $('#load_gambar').attr('src', e.target.result);
               }
               reader.readAsDataURL(input.files[0]);
           }


       }
       $('#preview_gambar').change(function() {
           bacaGambar(this);
       });
   </script>

   <script>
       function bacaGambar1(input) {
           if (input.files && input.files[0]) {
               var reader = new FileReader();
               reader.onload = function(e) {
                   $('#load_gambar1').attr('src', e.target.result);
               }
               reader.readAsDataURL(input.files[0]);
           }
       }
       $('#preview_gambar1').change(function() {
           bacaGambar1(this);
       });
   </script>