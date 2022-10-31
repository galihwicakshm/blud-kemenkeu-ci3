<?php echo form_open('akun/edit/' . $akun->kode_blud) ?>
<div class="col-md-12 container">

    <?php

    echo validation_errors('<div class="alert alert-danger alert-dismissible mt-3">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               <h5>', '</h5>
           </div>');



    if ($this->session->flashdata('pesan')) {
        echo '<div class="alert alert-success alert-dismissible mt-3">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i>';
        echo $this->session->flashdata('pesan');
        echo '</h5></div>';
    }
    if ($this->session->flashdata('error')) {
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
        echo $this->session->flashdata('error');
        echo '</div>';
    }

    ?>


    <div class="card h-100 mt-4 ">


        <div class="card-body mt-3">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <textarea name="motto" class=" form-control" id="exampleFormControlTextarea1" readonly rows="1"><?= $akun->nama ?></textarea>

                        </div>
                    </div>
                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password Lama</label>

                            <input type="password" name="password_lamaconf" class="form-control" id="exampleInputPassword1" placeholder="Password">


                            <input type="hidden" name="password_lama" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?= $akun->password ?>">


                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Password Baru</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
                            <input type="password" name="ulangi_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-success mt-3 mb-3">Simpan</button>
        <a href="<?= base_url('/') ?>" class="btn btn-outline-primary mt-3 mb-3">Kembali</a>
    </div>
</div>

</div>
<?php echo form_close() ?>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove()
        });
    }, 3000)
</script>