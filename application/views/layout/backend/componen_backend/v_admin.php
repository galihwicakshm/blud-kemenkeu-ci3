<div class="container-xxl text-center">
    <br>
    <h2 class="dahsboard-text mt-2">Selamat Datang Admin</h2>
    <div class="square-btn mt-3"></div>
    <div class="col-md-12 mt-4">
        <div class="row">
            <div class="col-sm-4">
                <div class="img-box">
                    <a href="<?= base_url("adminprofile") ?>"><img src="<?= base_url() ?>assets/carousel/data.jpg" class="img-dashboard-2 d-block w-100 mt-2 border border-secondary" alt="">
                </div>
                <div class="spn-bawah span-text mt-3 mb-3">
                    <span class="mt-5">Input Data BLUD</span>
                </div>
                </a>
            </div>
            <div class="col-sm-4">
                <div class="img-box">
                    <a href="<?= base_url("adminuser") ?>"><img src="<?= base_url() ?>assets/dashboard/adminprofile.png" class="img-dashboard-1 d-block w-100 mt-2 border border-secondary" alt="">
                </div>
                <div class="spn-bawah span-text mt-3 mb-3">
                    <span class="mt-5">Input Data User</span>
                </div>
                </a>
            </div>
            <div class="col-sm-4">

                <div class="img-box">
                    <a href="<?= base_url("adminperaturan") ?>"><img src="<?= base_url() ?>assets/carousel/rules.jpg" class="img-dashboard-1 d-block w-100 mt-2 border border-secondary" alt="">
                </div>
                <div class="spn-bawah span-text mt-3 mb-3">
                    <span class="mt-5">Input Data Peraturan</span>
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