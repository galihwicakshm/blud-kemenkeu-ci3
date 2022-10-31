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
    echo form_open_multipart('adminprofile/add') ?>
   <?php $string = "<iframe class='responsive-iframe' height='1100' src='https://datastudio.google.com/embed/reporting/cb725d1d-12ba-4dc3-a572-25f504691bc1/page/6zXD' frameborder='0' style='border:0' allowfullscreen></iframe>";

    ?>
   <input type="hidden" id="keuangan" name="keuangan" value="<?php echo $string ?>">
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
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Jumlah SDM</label>
                                       <textarea name="jumlahsdm" class=" form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                   </div>
                               </div>

                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Jabatan</label>
                                       <textarea name="jabatan" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                   </div>
                               </div>




                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Umur</label>
                                       <textarea name="umur" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Pendidikan</label>
                                       <textarea name="pendidikan" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Peraturan</label>
                                       <textarea name="profilperaturan" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                   </div>
                               </div>
                               <div class="form-group ">
                                   <label for="">Profil</label>
                                   <center> <img class="img-thumbnail" src="<?= base_url('assets/gambar/noimage.jpg') ?>" id="load_gambar" width="400px" height="320px"></center>
                               </div>

                               <div class="form-group ">
                                   <div class="custom-file">
                                       <label for="">Upload Image</label>
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



           </div>
           <div class="col-md-6 mt-4">
               <div class="card h-100">
                   <div class="card-header bg-secondary">
                       <strong>INFORMASI UMUM BLUD</strong>
                   </div>
                   <div class="card-body mt-3">
                       <div class="col-md-12">
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Kode BLUD</label>
                                       <input type="text" name="kode_blud" class="form-control" id="kode" aria-describedby="emailHelp">

                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Nama BLUD</label>
                                       <input type="text" name="nama_blud" class="form-control" id="nama_blud" aria-describedby="emailHelp">

                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Website</label>
                                       <input type="text" name="website" class=" form-control" id="website" aria-describedby="emailHelp">

                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Telepon</label>
                                       <input type="text" name="telp" class=" form-control" id="telpon" aria-describedby="emailHelp">

                                   </div>
                               </div>

                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Email</label>
                                       <input type="email" name="email" class=" form-control" id="email" aria-describedby="emailHelp">

                                   </div>
                               </div>
                               <div class="col-md-6">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Kode POS</label>
                                       <input type="text" name="kode_pos" class=" form-control" id="kode_pos" aria-describedby="emailHelp">

                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Alamat</label>
                                       <textarea name="alamat" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Fax</label>
                                       <input type="text" name="fax" class=" form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                   </div>
                               </div>

                               <div class="col-md-12">
                                   <label for="">Rumpun</label>
                                   <div class="selectpicks">
                                       <select name="id_rumpun" class="form-select class=" form-control selectpicker" data-live-search="true">
                                           <option selected>--Pilih--</option>
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



           </div>

           <div class="col-md-6">
               <div class="card h-100 mt-4 mb-4">
                   <div class="card-header bg-secondary">
                       <strong>LOGO</strong>
                   </div>
                   <div class="card-body mt-3">
                       <div class="col-md-12">
                           <div class="form-group ">
                               <center> <img class="img-thumbnail" src="<?= base_url('assets/gambar/noimage.jpg') ?>" id="load_gambar1" width="400px" height="320px"></center>
                           </div>

                           <div class="form-group ">


                               <div class="custom-file">
                                   <label for="">Upload Image</label>
                                   <label for="formFile">(Max 2MB)</label>
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
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Motto</label>
                                       <textarea name="motto" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Visi</label>
                                       <textarea name="visi" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                                   </div>
                               </div>

                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Tujuan</label>
                                       <textarea name="tujuan" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Misi</label>
                                       <textarea name="misi" class=" form-control" id="exampleFormControlTextarea1" rows="7"></textarea>

                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Sejarah Singkat</label>
                                       <textarea name="sejarah" class=" form-control" id="exampleFormControlTextarea1" rows="7"></textarea>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           <div class="col-md-6 mb-5">
               <div class="card h-100 mt-5">
                   <div class="card-header bg-secondary">
                       <strong>STRUKTUR ORGANISASI</strong>
                   </div>
                   <div class="card-body mt-3">
                       <div class="col-md-12">

                           <div class="custom-file">
                               <label for="">Upload PDF</label>
                               <label for="formFile">(Max 2MB)</label>
                               <input class="form-control" name="strukturpdf" type="file" />

                           </div>

                       </div>
                   </div>


               </div>
           </div>
           <div class="col-md-6 mb-5">
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
                                       <textarea name="peraturan_tarif" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Peraturan Pengelolaan Keuangan BLUD</label>
                                       <textarea name="peraturan_pengelolaan" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                                   </div>
                               </div>

                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Peraturan Penetapan Remunerasi BLUD</label>
                                       <textarea name="peraturan_penetapan" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Peraturan Kerja Sama Operasional (KSO) BLUD</label>
                                       <textarea name="peraturan_kerjasama" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Peraturan Pengadaan Barang/Jasa BLUD</label>
                                       <textarea name="peraturan_pengadaan" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group">
                                       <label for="exampleInputEmail1">Lainnya</label>
                                       <textarea name="peraturan_lainnya" class=" form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                   </div>
                               </div>
                           </div>
                       </div>



                   </div>


               </div>
           </div>

       </div>
       <div class="text-right">
           <button type="submit" id="submit" class="btn btn-success mt-3 mb-3">Simpan</button>
           <a href="<?= base_url('adminprofile') ?>" class="btn btn-outline-primary mt-3 mb-3">Kembali</a>
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

   <script>
       $(document).ready(function() {
           $('.selectpick select').selectpicker();
       })
   </script>