     <div class="container-xxl">
             <br>

             <h2 class="dahsboard-text text-center mt-2">Dashboard Keuangan BLUD</h2>
             <div class="square-btn mt-3"></div>

             <form method="GET" action="<?= site_url('/keuangan/data') ?>">


                     <div class="row">
                             <div class="col-sm-11 mt-4">
                                     <div class="selectpicks">
                                             <select name="id" class="form-control selectpicker" data-live-search="true">
                                                     <option id="#optionValue">--Pilih-- </option>
                                                     <?php foreach ($dataKeu as $key => $data) { ?>
                                                             <option value="<?= $data->id ?>"><?= $data->nama_rumpun ?> </option>
                                                     <?php } ?>
                                             </select>
                                     </div>
                             </div>
                             <div class="col-sm-1 mt-3">
                                     <div class="form-group">
                                             <button type="submit" class="btn btn-primary btn-md m-2" id="#buttonLoad">Load</button>
                                     </div>
                             </div>
                     </div>



             </form>



             <?php if ($dataKeu != "--Pilih--") { ?>
                     <?php if ($this->uri->segment(2) == 'data') : ?>
                             <?php foreach ($graphKeu as $key => $graphKeu) { ?>
                                     <?= $graphKeu->text ?>
                             <?php } ?>

                     <?php elseif ($this->uri->segment(2) != 'data') : ?>
                             <?php foreach ($allKeu as $key => $allKeu) { ?>
                                     <?= $allKeu->text ?>

                             <?php   } ?>
                     <?php endif; ?>

             <?php  } ?>
     </div>