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
            echo form_open_multipart('data/organisasi/edit/' . $data->id) ?>
          <div class="col-md-12 mb-5 container">
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


                  <button type="submit">SIMPAN</button>
              </div>
          </div>

          <?php echo form_close() ?>