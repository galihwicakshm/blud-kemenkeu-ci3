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
            echo form_open_multipart('data/regulasi/update/' . $data->id) ?>

            <div class="col-md-12 mb-4 container">
                <div class="card h-100 mt-5">
                    <div class="card-header bg-secondary">
                        <strong>REGULASI</strong>
                    </div>
                    <div class="card-body mt-3">

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Peraturan Tarif Layanan BLUD</label>
                                        <textarea name="peraturan_tarif" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $data->peraturan_tarif ?></textarea>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Peraturan Pengelolaan Keuangan BLUD</label>
                                        <textarea name="peraturan_pengelolaan" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $data->peraturan_pengelolaan ?></textarea>

                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Peraturan Penetapan Remunerasi BLUD</label>
                                        <textarea name="peraturan_penetapan" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $data->peraturan_penetapan ?></textarea>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Peraturan Kerja Sama Operasional (KSO) BLUD</label>
                                        <textarea name="peraturan_kerjasama" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $data->peraturan_kerjasama ?></textarea>

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Peraturan Pengadaan Barang/Jasa BLUD</label>
                                        <textarea name="peraturan_pengadaan" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $data->peraturan_pengadaan ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Lainnya</label>
                                        <textarea name="peraturan_lainnya" class=" form-control" id="exampleFormControlTextarea1" rows="3"><?= $data->peraturan_lainnya ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-success mt-3 mb-3">Simpan</button>
                    <a href="<?= base_url('adminprofile/pilihandata/' . $data->id) ?>" class="btn btn-outline-primary mt-3 mb-3">Kembali</a>
                </div>
            </div>
            <?php echo form_close() ?>