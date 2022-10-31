<h3>Data di Cari</h3>
<div class="nav-align-top mb-4">
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-home" aria-controls="navs-top-home" aria-selected="true">
                BLUD
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-profile" aria-controls="navs-top-profile" aria-selected="false">
                Logo
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-messages" aria-controls="navs-top-messages" aria-selected="false">
                Informasi Umum
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-diterima" aria-controls="navs-top-diterima" aria-selected="false">
                Struktur Organisasi
            </button>
        </li>
        <li class="nav-item">
            <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-top-dibatalkan" aria-controls="navs-top-dibatalkan" aria-selected="false">
                Organisasi
            </button>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">


            <div class="row">
                <div class="col-md-2">
                    <p style="text-align:right;"><b>Kode Satker :</b> </p>
                </div>
                <div class="col-md-2">
                    <p><?= $dataProfile->kode_blud ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p style="text-align:right;"><b>Nama Satker :</b> </p>
                </div>
                <div class="col-md-2">
                    <p><?= $dataProfile->nama_blud ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p style="text-align:right;"><b>Alamat :</b> </p>
                </div>
                <div class="col-md-2">
                    <p><?= $dataProfile->alamat ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p style="text-align:right;"><b>Telp :</b> </p>
                </div>
                <div class="col-md-2">
                    <p><?= $dataProfile->telp ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p style="text-align:right;"><b>Email :</b> </p>
                </div>
                <div class="col-md-2">
                    <p><?= $dataProfile->email ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <p style="text-align:right;"><b>Kode Pos :</b> </p>
                </div>
                <div class="col-md-2">
                    <p><?= $dataProfile->kode_pos ?></p>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
            <div class="nama m-2">

                <h3><?= $dataProfile->nama_blud ?></h3>

                <img src="<?= base_url('assets/img/' . $dataProfile->logo) ?>" width="100px" height="100px" alt="erorr">

            </div>
        </div>
        <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">
            <div class="nama m-2">
                <?= $dataProfile->grafik ?>
            </div>
        </div>
        <div class="tab-pane fade" id="navs-top-diterima" role="tabpanel">
        </div>
        <div class="tab-pane fade" id="navs-top-dibatalkan" role="tabpanel">
            <p>Visi : <?= $dataProfile->visi ?></p>
            <p>Misi : <?= $dataProfile->misi ?></p>
        </div>

    </div>
</div>