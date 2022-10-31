<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->


            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online ">
                        <img src="<?= base_url('/assets/user.png') ?>" alt class="rounded-circle " />
                    </div>
                </a>
                <div class="mb-2"></div>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="<?= base_url('/assets/user.png') ?>" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="name-format fw-semibold d-block">

                                        <?php $login = $this->m_data->akunLogin() ?>

                                        <?= $login->nama ?></span>

                                    <!-- <?= $this->session->userdata('nama') ?></span> -->

                                    <small class="text-muted"> <?= $login->kode_blud ?></small>


                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?= base_url('akun') ?>">
                            <i class="fa-solid fa-gear me-2"></i> <span class="align-middle">Setting Akun</span>
                        </a>
                    </li>
                    <div class="dropdown-divider"></div>

                    <li>
                        <a class="dropdown-item" href="<?= base_url('auth/logout') ?>">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Log Out</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mr-4"> <?= $login->nama ?>
            </li>
            <!--/ User -->
        </ul>
        <!-- Messages Dropdown Menu -->


    </ul>
</nav>