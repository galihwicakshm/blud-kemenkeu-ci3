<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#l" class="brand-link">
		<img src="<?= base_url('assets/img/logo.png') ?>" alt="AdminL" class="brand-image elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light"> Kemenkeu</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->

		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="d-flex">
				<div class="flex-shrink-0 me-3">
					<div class="avatar">
						<img src="<?= base_url('/assets/user.png') ?>" alt class="ml-2 w-px-40 h-auto rounded-circle" />
					</div>
				</div>
				<div class="flex-grow-1">
					<span class="brand-text name-format fw-semibold d-block ml-1 text-white"><?= $this->session->userdata('nama') ?></span>




				</div>
			</div>
		</div>

		<!-- SidebarSearch Form -->


		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

				<li class="nav-item">
					<a href="<?= base_url('/') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'admin' || $this->uri->segment(1) == 'dashboard') {
																		echo "active";
																	}
																	?>">
						<i class="nav-icon fa-solid fa-house"></i>

						<p>
							Home
						</p>
					</a>
				</li>
				<li class="nav-item menu-<?php if ($this->uri->segment(1) == 'adminprofile' || $this->uri->segment(1) == 'adminperaturan' || $this->uri->segment(1) == 'adminuser') {
												echo "open";
											}
											?>">
					<a href="#" class=" nav-link <?php if ($this->uri->segment(1) == 'adminprofile') {
														echo "active";
													}
													?>">
						<i class="nav-icon fa-solid fa-server"></i>
						<p>
							Data BLUD
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('adminprofile') ?>" class=" nav-link <?php if ($this->uri->segment(1) == 'adminprofile') {
																							echo "active";
																						}
																						?>">
								<i class="nav-icon fa-solid fa-list"></i>

								<p>Input Data BLUD</p>
							</a>
						</li>
						<!-- <li class="nav-item">
							<a href="<?= base_url('adminperaturan') ?>" class=" nav-link <?php if ($this->uri->segment(1) == 'adminperaturan') {
																								echo "active";
																							}
																							?>">
								<i class="nav-icon fa-solid fa-list"></i>

								<p>Input Peraturan BLUD</p>
							</a>
						</li> -->
						<li class="nav-item">
							<a href="<?= base_url('adminuser') ?>" class=" nav-link <?php if ($this->uri->segment(1) == 'adminuser') {
																						echo "active";
																					}
																					?>">
								<i class="nav-icon fa-solid fa-list"></i>

								<p>Input User BLUD</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('adminperaturan') ?>" class=" nav-link <?php if ($this->uri->segment(1) == 'adminperaturan') {
																								echo "active";
																							}
																							?>">
								<i class="nav-icon fa-solid fa-list"></i>

								<p>Input Peraturan BLUD</p>
							</a>
						</li>





						<!-- <li class="nav-item">
							<a href="./index2.html" class="nav-link">
								<i class="nav-icon fa-solid fa-circle"></i>
								<p>Dashboard v2</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="./index3.html" class="nav-link">
								<i class="far nav-icon"></i>
								<p>Dashboard v3</p>
							</a>
						</li> -->
					</ul>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->


	<!-- Main content -->
	<section class="content">