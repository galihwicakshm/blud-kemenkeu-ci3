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
   <button type="submit">SIMPAN</button>
   </div>

   <?php echo form_close() ?>