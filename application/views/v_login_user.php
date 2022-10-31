<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="<?= base_url() ?>assets/dashboard/logo.png" />
    <title>Login Website BLUD</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="<?= base_url() ?>template-admin/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template-admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url() ?>template-admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url() ?>template-admin/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>template-admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="<?= base_url() ?>template-admin/assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="<?= base_url() ?>template-admin/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url() ?>template-admin/assets/js/config.js"></script>
</head>

<body>
    <!-- Content -->

    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <a href="<?= base_url('auth') ?>" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <img src="<?= base_url('assets/logo.png') ?>" height="220px" width="230px" alt="">
                                </span>

                            </a>
                        </div>
                        <!-- <h4 class="mt-4">Kemenkeu</h4> -->
                        <!-- /Logo -->

                        <h4 class="mb-5 text-center"> <strong>Kantor Wilayah Provinsi Jabar </strong></h4>


                        <h5 class="mt-3 text-center">Sign In</h5>
                        <!-- <p class="mb-4 text-center">Silahkan login terlebih dahulu</p> -->
                        <?php
                        echo validation_errors('<div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>                                       ', '</div>');

                        if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-success alert-dismissible">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>                                          ';
                            echo $this->session->flashdata('pesan');
                            echo '</div>';
                        }
                        if ($this->session->flashdata('error')) {
                            echo '<div class="alert alert-danger alert-dismissible" role="alert">
                                    
                                        ';
                            echo $this->session->flashdata('error');
                            echo '</div>';
                        }
                        echo form_open('auth');
                        ?>
                        <form id="formAuthentication" class="mb-3" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label">Kode BLUD</label>
                                <input type="text" class="form-control" id="kode_blud" name="kode_blud" placeholder="Kode BLUD" autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label" for="password">Password</label>

                                </div>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>


                            <div class="g-recaptcha container" width="200px" data-sitekey="6Lc8094gAAAAAHgjB_-pyXJi_KhzO2x4XAtrF5Cr"></div>
                            <br />
                            <div class="mb-3">
                                <button class="btn btn-primary d-grid w-100" name="login" type="submit">Sign in</button>
                            </div>
                        </form>
                        <?php echo form_close() ?>

                    </div>
                </div>
                <!-- /Register -->

            </div>
        </div>

        <!-- / Content -->



        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->
        <script src="<?= base_url() ?>template-admin/assets/vendor/libs/jquery/jquery.js"></script>
        <script src="<?= base_url() ?>template-admin/assets/vendor/libs/popper/popper.js"></script>
        <script src="<?= base_url() ?>template-admin/assets/vendor/js/bootstrap.js"></script>
        <script src="<?= base_url() ?>template-admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

        <script src="<?= base_url() ?>template-admin/assets/vendor/js/menu.js"></script>
        <!-- endbuild -->

        <!-- Vendors JS -->

        <!-- Main JS -->
        <script src="<?= base_url() ?>template-admin/assets/js/main.js"></script>

        <!-- Page JS -->

        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script>
            window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove()
                });
            }, 3000)
        </script>
</body>

</html>