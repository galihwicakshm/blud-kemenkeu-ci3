<div class="container-xxl text-center">
    <br>
    <h2 class="dahsboard-text mt-2">Selamat Datang di Website BLUD Kanwil DJPb Jawa Barat</h2>
    <div class="square-btn mt-3"></div>
    <div class="col-md-12 mt-4">
        <div class="row">
            <div class="col-sm-6">
                <div class="img-box">
                    <a href="<?= base_url("profil") ?>"><img src="<?= base_url('assets/dashboard/find.png') ?>" class="img-dashboard-2 d-block w-100 mt-2" alt="">
                </div>
                <div class="spn-bawah span-text mt-3 mb-3">
                    <span class="mt-5">Profil BLUD</span>
                </div>
                </a>
            </div>
            <div class="col-sm-6">
                <div class="img-box">
                    <a style="object-fit: cover;" href="<?= base_url("dataprofile") ?>"><img src="<?= base_url('assets/dashboard/dashboardprofil.png') ?>" class="img-dashboard-1 d-block w-100 mt-2" alt="">
                </div>
                <div class="spn-bawah span-text mt-3 mb-3">
                    <span class="mt-5">Dashboard Profile</span>
                </div>
                </a>
            </div>
            <div class="col-sm-6">
                <div class="img-box">
                    <a style="object-fit: cover;" href="<?= base_url("keuangan") ?>"><img src="<?= base_url('assets/dashboard/keuangan.png') ?>" class="img-dashboard-1 d-block w-100 mt-2" alt="">
                </div>
                <div class="spn-bawah span-text mt-3 mb-3">
                    <span class="mt-5">Dashboard Keuangan</span>
                </div>
                </a>
            </div>
            <div class="col-sm-6">
                <div class="img-box">
                    <a href=" <?= base_url("peraturan") ?>"> <img src="<?= base_url('assets/dashboard/Peraturan1.png') ?>" class="img-dashboard-2 d-block w-100 mt-2" alt="">
                </div>
                <div class="spn-bawah span-text mt-3 mb-3">
                    <span class="mt-5">Peraturan</span>
                </div>
                </a>
            </div>

        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('.selectpick select').selectpicker();
    })
</script>