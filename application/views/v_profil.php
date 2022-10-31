<div class="container-xxl">
    <br>
    <h2 class="dahsboard-text text-center mt-2">Profil Data BLUD</h2>
    <div class="square-btn mt-3"></div>

    <form method="GET" action="<?= site_url('/profil/data') ?>">


        <div class="row">
            <div class="col-sm-11 mt-4">
                <div class="selectpicks">
                    <select name="id" class="form-control selectpicker" data-live-search="true">
                        <option id="#optionValue">--Pilih-- </option>
                        <?php foreach ($dataTabel as $key => $data) { ?>
                            <option value="<?= $data->id ?>"><?= $data->nama_blud ?> </option>
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
    <?php if ($dataCari != "--Pilih--") { ?>
        <?php if ($this->uri->segment(2) == 'data') : ?>
            <div class="row">
                <div class="col-12">
                    <h3>Data di Cari</h3>
                    <div class="nav-align-top mb-4">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-utama" aria-controls="navs-top-utama" aria-selected="true">
                                    UTAMA
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-logo" aria-controls="navs-top-logo" aria-selected="false">
                                    LOGO
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-informasi" aria-controls="navs-top-informasi" aria-selected="false">
                                    INFORMASI UMUM
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-organisasi" aria-controls="navs-top-organisasi" aria-selected="false">
                                    ORGANISASI
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-struktur" aria-controls="navs-top-struktur" aria-selected="false">
                                    STRUKTUR ORGANISASI
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-regulasi" aria-controls="navs-top-regulasi" aria-selected="false">
                                    REGULASI
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="navs-top-utama" role="tabpanel">

                                <?php foreach ($dataProfile as $key => $dataProfile) { ?>
                                    <center>
                                        <h4> <?= $dataProfile->nama_blud ?></h4>
                                    </center>

                                    <center> <img src="<?= base_url('assets/img/' . $dataProfile->foto) ?>" width="300px" height="250px" alt="erorr" class="mt-2">
                                    </center>
                                    <div class="col-md-12 mt-2 text-center" style="white-space: pre-line">
                                        <b>Jumlah SDM : </b>
                                        <?= $dataProfile->jumlahsdm ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="text-center">
                                                <div style="white-space: pre-line">
                                                    <b>Pendidikan :</b>
                                                </div>
                                            </div>
                                            <div class="text-justify">
                                                <div style="white-space: pre-line">
                                                    <?= $dataProfile->pendidikan ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="text-center">
                                                <div style="white-space: pre-line">
                                                    <b>Jabatan :</b>
                                                </div>
                                            </div>
                                            <div class="text-justify">
                                                <div style="white-space: pre-line">
                                                    <?= $dataProfile->jabatan ?>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="col-md-3 ">
                                            <div class="text-center">
                                                <div style="white-space: pre-line">
                                                    <b>Umur :</b>
                                                </div>
                                            </div>
                                            <div style="white-space: pre-line" class="text-justify">
                                                <?= $dataProfile->umur ?>
                                            </div>
                                        </div>
                                        <div class="col-md-3 ">
                                            <div class="text-center">
                                                <div style="white-space: pre-line">
                                                    <b>Peraturan Penetapan BLUD :</b>
                                                </div>
                                            </div>
                                            <div style="white-space: pre-line" class="text-justify">
                                                <?= $dataProfile->profilperaturan ?>
                                            </div>
                                        </div>
                                    </div>
                            </div>

                            <div class="tab-pane fade" id="navs-top-logo" role="tabpanel">
                                <div class="nama m-2">

                                    <center>

                                        <img src="<?= base_url('assets/img/' . $dataProfile->logo) ?>" width="300px" height="250px" alt="erorr">
                                    </center>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-top-informasi" role="tabpanel">
                                <div class="nama m-2">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <p style="text-align:right;"><b>Kode BLUD :</b> </p>
                                        </div>
                                        <div class="col-md-2">
                                            <p><?= $dataProfile->kode_blud ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <p style="text-align:right;"><b>Nama BLUD :</b> </p>
                                        </div>
                                        <div class="col-md-5">
                                            <p><?= $dataProfile->nama_blud ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <p style="text-align:right;"><b>Telp :</b> </p>
                                        </div>
                                        <div class="col-md-2">
                                            <p><?= $dataProfile->telp ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <p style="text-align:right;"><b>Fax :</b> </p>
                                        </div>
                                        <div class="col-md-2">
                                            <p><?= $dataProfile->fax ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <p style="text-align:right;"><b>Email :</b> </p>
                                        </div>
                                        <div class="col-md-2">
                                            <p><?= $dataProfile->email ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <p style="text-align:right;"><b>Website :</b> </p>
                                        </div>
                                        <div class="col-md-2">
                                            <p><?= $dataProfile->website ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <p style="text-align:right;"><b>Alamat :</b> </p>
                                        </div>
                                        <div class="col-md-7">
                                            <p><?= $dataProfile->alamat ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <p style="text-align:right;"><b>Kode POS :</b> </p>
                                        </div>
                                        <div class="col-md-7">
                                            <p><?= $dataProfile->kode_pos ?></p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-5">
                                            <p style="text-align:right;"><b>Rumpun :</b> </p>
                                        </div>
                                        <div class="col-md-2">
                                            <p><?= $dataProfile->nama_rumpun ?></p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-top-organisasi" role="tabpanel">
                                <div class="row">


                                    <?php if ($dataProfile->motto == "NULL" || $dataProfile->motto == "") { ?>
                                    <?php } elseif ($dataProfile->motto != "NULL") { ?>
                                        <div class="col-md-12">
                                            <div class="card text-center mt-3">
                                                <div class="card-header bg-secondary">
                                                    <h6 class="mt-3 text-white">Motto BLUD</h6>
                                                </div>
                                                <div class="card-body text-justify">
                                                    <div class="card-title mt-4" style="white-space: pre-line"><?= $dataProfile->motto ?></div>

                                                </div>

                                            </div>
                                        </div>
                                    <?php   } ?>


                                    <?php if ($dataProfile->visi == "NULL" || $dataProfile->visi == "") { ?>
                                    <?php } elseif ($dataProfile->visi != "NULL") { ?>
                                        <div class="col-md-12">
                                            <div class="card text-center mt-3">
                                                <div class="card-header bg-secondary">
                                                    <h6 class="mt-3 text-white">Visi BLUD</h6>
                                                </div>
                                                <div class="card-body text-justify">
                                                    <div class="card-title mt-4" style="white-space: pre-line"><?= $dataProfile->visi ?></div>

                                                </div>

                                            </div>
                                        </div>
                                    <?php   } ?>

                                    <?php if ($dataProfile->misi == "NULL" || $dataProfile->misi == "") { ?>
                                    <?php } elseif ($dataProfile->misi != "NULL") { ?>
                                        <div class="col-md-12">
                                            <div class="card text-center  mt-4">
                                                <div class="card-header bg-secondary">
                                                    <h6 class="mt-3 text-white">Misi BLUD</h6>
                                                </div>
                                                <div class="card-body text-justify">
                                                    <div class="card-title mt-4" style="white-space: pre-line"><?= $dataProfile->misi ?></div>
                                                </div>

                                            </div>
                                        </div>
                                    <?php   } ?>


                                    <?php if ($dataProfile->tujuan == "NULL" || $dataProfile->tujuan == "") { ?>
                                    <?php } elseif ($dataProfile->tujuan != "NULL") { ?>
                                        <div class="col-md-12">
                                            <div class="card text-center mt-4">
                                                <div class="card-header bg-secondary ">
                                                    <h6 class="mt-3 text-white">Tujuan BLUD</h6>
                                                </div>
                                                <div class="card-body text-justify">
                                                    <div class="card-title mt-4" style="white-space: pre-line"><?= $dataProfile->tujuan ?></div>
                                                </div>

                                            </div>
                                        </div>
                                    <?php   } ?>

                                    <?php if ($dataProfile->sejarah == "NULL" || $dataProfile->sejarah == "") { ?>
                                    <?php } elseif ($dataProfile->sejarah != "NULL") { ?>
                                        <div class="col-md-12">
                                            <div class="card text-center mt-4">
                                                <div class="card-header bg-secondary ">
                                                    <h6 class="mt-3 text-white">Sejarah BLUD</h6>
                                                </div>
                                                <div class="card-body text-justify">
                                                    <div class="card-title mt-4" style="white-space: pre-line"><?= $dataProfile->sejarah ?></div>

                                                </div>

                                            </div>
                                        </div>
                                    <?php   } ?>
                                </div>



                            </div>

                            <div class="tab-pane fade" id="navs-top-struktur" role="tabpanel">
                                <table class="table table-striped ">
                                    <thead>
                                        <tr>

                                            <th>Bentuk Struktur</th>
                                            <th>Pdf</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr>
                                            <td> <?= $dataProfile->strukturpdf ?>
                                            </td>
                                            <td> <a href="<?= base_url('assets/pdf/' . $dataProfile->strukturpdf) ?>" target="_blank" class="btn btn-primary btn-sm">Lihat PDF</a>
                                            </td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>


                            <?php if ($dataProfile->peraturan_tarif == "NULL" || $dataProfile->peraturan_tarif == "") { ?>
                            <?php } elseif ($dataProfile->peraturan_tarif != "NULL") { ?>
                                <div class="tab-pane fade" id="navs-top-regulasi" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="card text-center mt-3">
                                                <div class="card-header bg-secondary">
                                                    <h6 class="mt-3 text-white">Peraturan Tarif Layanan BLUD</h6>
                                                </div>
                                                <div class="card-body text-justify">
                                                    <div class="card-title mt-4" style="white-space: pre-line"><?= $dataProfile->peraturan_tarif ?></div>

                                                </div>

                                            </div>
                                        </div>
                                    <?php   } ?>


                                    <?php if ($dataProfile->peraturan_pengelolaan == "NULL" || $dataProfile->peraturan_pengelolaan == "") { ?>
                                    <?php } elseif ($dataProfile->peraturan_pengelolaan != "NULL") { ?>
                                        <div class="col-md-12">
                                            <div class="card text-center mt-3">
                                                <div class="card-header bg-secondary">
                                                    <h6 class="mt-3 text-white">Peraturan Pengelolaan Keuangan BLUD</h6>
                                                </div>
                                                <div class="card-body text-justify">
                                                    <div class="card-title mt-4" style="white-space: pre-line"><?= $dataProfile->peraturan_pengelolaan ?></div>

                                                </div>

                                            </div>
                                        </div>
                                    <?php   } ?>

                                    <?php if ($dataProfile->peraturan_penetapan == "NULL" || $dataProfile->peraturan_penetapan == "") { ?>
                                    <?php } elseif ($dataProfile->peraturan_penetapan != "NULL") { ?>
                                        <div class="col-md-12">
                                            <div class="card text-center  mt-4">
                                                <div class="card-header bg-secondary">
                                                    <h6 class="mt-3 text-white">Peraturan Penetapan Remunerasi BLUD</h6>
                                                </div>
                                                <div class="card-body text-justify">
                                                    <div class="card-title mt-4" style="white-space: pre-line"><?= $dataProfile->peraturan_penetapan ?></div>
                                                </div>

                                            </div>
                                        </div>
                                    <?php   } ?>


                                    <?php if ($dataProfile->peraturan_kerjasama == "NULL" || $dataProfile->peraturan_kerjasama == "") { ?>
                                    <?php } elseif ($dataProfile->peraturan_kerjasama != "NULL") { ?>
                                        <div class="col-md-12">
                                            <div class="card text-center mt-4">
                                                <div class="card-header bg-secondary ">
                                                    <h6 class="mt-3 text-white">Peraturan Kerja Sama Operasional (KSO) BLUD</h6>
                                                </div>
                                                <div class="card-body text-justify">
                                                    <div class="card-title mt-4" style="white-space: pre-line"><?= $dataProfile->peraturan_kerjasama ?></div>
                                                </div>

                                            </div>
                                        </div>
                                    <?php   } ?>




                                    <?php if ($dataProfile->peraturan_pengadaan == "NULL" || $dataProfile->peraturan_pengadaan == "") { ?>
                                    <?php } elseif ($dataProfile->peraturan_pengadaan != "NULL") { ?>
                                        <div class="col-md-12">
                                            <div class="card text-center mt-4">
                                                <div class="card-header bg-secondary ">
                                                    <h6 class="mt-3 text-white">Peraturan Pengadaan Barang/Jasa BLUD</h6>
                                                </div>
                                                <div class="card-body text-justify">
                                                    <div class="card-title mt-4" style="white-space: pre-line"><?= $dataProfile->peraturan_pengadaan ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php   } ?>



                                    <?php if ($dataProfile->peraturan_lainnya == "NULL" || $dataProfile->peraturan_lainnya == "") { ?>

                                    <?php } elseif ($dataProfile->peraturan_lainnya != "NULL") { ?>
                                        <div class="col-md-12">
                                            <div class="card text-center mt-4">
                                                <div class="card-header bg-secondary ">
                                                    <h6 class="mt-3 text-white">Lainnya</h6>
                                                </div>
                                                <div class="card-body text-justify">
                                                    <div class="card-title mt-4" style="white-space: pre-line"><?= $dataProfile->peraturan_lainnya ?></div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php   } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php elseif ($this->uri->segment(2)) : ?>
        <?php endif; ?>
    <?php  } ?>
</div>

<script>
    $(document).ready(function() {
        $('.selectpick select').selectpicker();
    })
</script>