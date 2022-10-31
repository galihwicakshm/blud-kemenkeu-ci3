<div class="container-xxl ">
    <br>
    <h2 class="dahsboard mt-2">Dashboard BLUD</h2>
    <div class="square mt-3"></div>
    <div class="col-md-12">
        <div class="card card-primary  mt-4">
            <div class="card-header">
                <h3 class="card-title">Form Input Peraturan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
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
                echo form_open_multipart('adminperaturan/add') ?>


                <div class="row">
                    <div class="col-sm-12 mt-3">

                        <div class="form-group">
                            <label>Nama Peraturan</label>
                            <input name="nama_peraturan" class="form-control mt-1" placeholder="Nama Peraturan" value="<?= set_value('nama_peraturan') ?>">
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="formFile">PDF (Max 2MB)</label>
                            <input class="form-control" name="pdf" type="file" id="formFile" />
                        </div>
                    </div>
                </div>


            </div>

            <div class="card-footer">
                <hr>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    <a href="<?= base_url('adminperaturan') ?>" class="btn btn-warning btn-sm ">Kembali</a>

                </div>

            </div>

            <?php echo form_close() ?>
        </div>

    </div>
</div>


<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove()
        });
    }, 3000)
</script>