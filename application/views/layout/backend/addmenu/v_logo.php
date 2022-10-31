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
        echo form_open_multipart('data/logo/edit/' . $data->id) ?>
      <div class="col-md-12 container">
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
              <button type="submit">SIMPAN</button>
          </div>
      </div>

      <?php echo form_close() ?>