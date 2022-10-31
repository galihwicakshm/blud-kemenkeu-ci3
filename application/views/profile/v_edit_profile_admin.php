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
    echo form_open_multipart('adminprofile/edit/' . $data->id) ?>
   <div class="col-md-12">
       <div class="row">
           <div class="col-md-6 mt-4">
               <div class="card h-100">
                   <div class="card-header bg-secondary">
                       <strong>UTAMA</strong>
                   </div>
                   <div class="card-body mt-3">
                       <div class="col-md-12">
                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Jabatan</label>
                                       <input type="text" name="jabatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data->jabatan ?>">

                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Umur</label>
                                       <input type="number" name="umur" class=" form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data->umur ?>">

                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Pendidikan</label>
                                       <input type="text" name="pendidikan" class=" form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data->pendidikan ?>">

                                   </div>
                               </div>
                               <div class="form-group ">
                                   <center> <img src="<?= base_url('assets/img/' . $data->foto) ?>" id="load_gambar" width="400px" height="320px"></center>
                               </div>

                               <div class="form-group ">
                                   <div class="custom-file">
                                       <label for="formFile">PDF (Max 2MB)</label>
                                       <input class="form-control" name="foto" type="file" id="preview_gambar" />
                                   </div>
                                   <!-- <label>Upload Gambar(Max 2MB) : </label>
                  <input class="custom-file-input" type="file" name="gambar" id="preview_gambar" width="400px"> -->
                               </div>

                           </div>
                       </div>
                   </div>
               </div>



           </div>
           <div class="col-md-6 mt-4">
               <div class="card h-100">
                   <div class="card-header bg-secondary">
                       <strong>BLUD</strong>
                   </div>
                   <div class="card-body mt-3">
                       <div class="col-md-12">
                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Kode Satker</label>
                                       <input type="text" name="kode_blud" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data->kode_blud ?>">

                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Website</label>
                                       <input type="text" name="website" class=" form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data->website ?>">

                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Telpon</label>
                                       <input type="text" name="telp" class=" form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data->telp ?>">

                                   </div>
                               </div>

                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Email</label>
                                       <input type="email" name="email" class=" form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data->email ?>">

                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Alamat</label>
                                       <textarea name="alamat" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $data->alamat ?></textarea>
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Fax</label>
                                       <input type="text" name="fax" class=" form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data->fax ?>">

                                   </div>
                               </div>

                               <div class="col-md-12">
                                   <label for="">Rumpun</label>
                                   <select name="id_rumpun" class="form-select" aria-label="Default select example">
                                       <option value="<?= $data->id_rumpun ?>"><?= $data->nama_rumpun ?></option>
                                       <?php foreach ($rumpun as $key => $rumpun) { ?>
                                           <option value="<?= $rumpun->id_rumpun ?>"><?= $rumpun->nama_rumpun ?> </option>
                                       <?php } ?>

                                   </select>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>



           </div>

           <div class="col-md-6">
               <div class="card h-100 mt-4 mb-4">
                   <div class="card-header bg-secondary">
                       <strong>LOGO</strong>
                   </div>
                   <div class="card-body mt-3">
                       <div class="col-md-12">
                           <div class="form-group ">
                               <center> <img src="<?= base_url('assets/img/' . $data->logo) ?>" id="load_gambar1" width="400px" height="320px"></center>
                           </div>

                           <div class="form-group ">


                               <div class="custom-file">
                                   <label for="formFile">PDF (Max 2MB)</label>
                                   <input class="form-control" name="logo" type="file" id="preview_gambar1" />

                               </div>
                               <!-- <label>Upload Gambar(Max 2MB) : </label>
                  <input class="custom-file-input" type="file" name="gambar" id="preview_gambar" width="400px"> -->
                           </div>
                       </div>


                   </div>
               </div>
           </div>
           <div class="col-md-6">
               <div class="card h-100 mt-4 ">
                   <div class="card-header bg-secondary">
                       <strong>ORGANISASI</strong>
                   </div>
                   <div class="card-body mt-3">
                       <div class="col-md-12">
                           <div class="row">
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Motto</label>
                                       <input type="text" name="motto" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data->motto ?>">

                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Visi</label>
                                       <input type="text" name="visi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data->visi ?>">

                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Misi</label>
                                       <input type="text" name="misi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data->misi ?>">

                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Tujuan</label>
                                       <textarea name="tujuan" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $data->tujuan ?></textarea>

                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Sejarah Singkat</label>
                                       <textarea name="sejarah" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $data->sejarah ?></textarea>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <button type="submit">SIMPAN</button>
           </div>
           <div class="col-md-6 mb-5">
               <div class="card h-100 mt-5">
                   <div class="card-header bg-secondary">
                       <strong>STRUKTUR ORGANISASI</strong>
                   </div>
                   <div class="card-body mt-3">
                       <div class="col-md-12">

                           <div class="custom-file">
                               <label for="formFile">PDF (Max 2MB)</label>
                               <input class="form-control" name="strukturpdf" type="file" id="formFile" />
                               <?= $data->strukturpdf ?>
                           </div>
                           <!-- <label>Upload Gambar(Max 2MB) : </label>
                  <input class="custom-file-input" type="file" name="gambar" id="preview_gambar" width="400px"> -->
                       </div>
                   </div>


               </div>
           </div>
       </div>


   </div>


   </div>
   </div>
   <?php echo form_close() ?>
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