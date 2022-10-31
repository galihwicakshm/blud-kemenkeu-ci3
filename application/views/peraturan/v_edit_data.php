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
            echo form_open_multipart('adminperaturan/edit/' . $getDataPeraturan->id) ?>
          <div class="col-md-12 container">
              <div class="card h-100 mt-4 ">
                  <div class="card-header bg-secondary text-center">
                      <strong>Peraturan</strong>
                  </div>
                  <div class="card-body mt-3">
                      <div class="col-md-12">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Modul Peraturan</label>
                                      <textarea name="modul_peraturan" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $getDataPeraturan->modul_peraturan ?></textarea>

                                  </div>
                              </div>
                              <!-- <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Visi</label>
                                      <textarea name="visi" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $getDataPeraturan->infografis_peraturan  ?></textarea>

                                  </div>
                              </div>

                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Tujuan</label>
                                      <textarea name="tujuan" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $getDataPeraturan->materi_paparan ?></textarea>

                                  </div>
                              </div>
                              <div class="col-md-12">
                                  <div class="form-group">
                                      <label for="exampleInputEmail1">Misi</label>

                                      <textarea name="misi" class=" form-control" id="exampleFormControlTextarea1" rows="10"><?= $getDataPeraturan->tautan_kumpulan_peraturan  ?></textarea>

                                  </div>
                              </div> -->

                          </div>
                      </div>
                  </div>
              </div>
              <div class="text-right">
                  <button type="submit" class="btn btn-success mt-3 mb-3">Simpan</button>
                  <a href="<?= base_url('adminperaturan') ?>" class="btn btn-outline-primary mt-3 mb-3">Kembali</a>
              </div>
          </div>
          <?php echo form_close() ?>