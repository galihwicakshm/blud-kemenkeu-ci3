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
            echo form_open_multipart('data/informasi/update/' . $data->id) ?>
          <div class="col-md-12 mt-4 container">
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
                                      <input type="text" name="kode_satker" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $data->kode_satker ?>">

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
                  <button type="submit">SIMPAN</button>
              </div>
          </div>

          <?php echo form_close() ?>