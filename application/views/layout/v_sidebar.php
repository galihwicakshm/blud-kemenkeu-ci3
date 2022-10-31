<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="#" class="brand-link">
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
					<span class="brand-text name-format fw-semibold d-block ml-1 text-white">

						<?php $login = $this->m_data->akunLogin() ?>


						<?= $login->nama ?></span>
					<span class="brand-text name-format fw-semibold d-block ml-1 text-white"> <?= $login->kode_blud ?></span>

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
					<a href="<?= base_url('/') ?>" class="nav-link <?php if ($this->uri->segment(1) == '' || $this->uri->segment(1) == 'dashboard') {
																		echo "active";
																	}
																	?>">
						<i class="nav-icon fa-solid fa-house"></i>

						<p>
							Home
						</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url('profil') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'profil') {
																			echo "active";
																		}
																		?>">
						<i class="nav-icon fa-solid fa-file-lines"></i>

						<p>
							Profil
						</p>
					</a>
				</li>
				<li class="nav-item menu-<?php if ($this->uri->segment(1) == 'keuangan' || $this->uri->segment(1) == 'dataprofile') {
												echo "open";
											}
											?>">
					<a href="#" class=" nav-link <?php if ($this->uri->segment(1) == 'adminprofile') {
														echo "active";
													}
													?>">
						<i class="nav-icon fa-solid fa-server"></i>
						<p>
							Dashboard
							<i class="right fas fa-angle-left"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url('dataprofile') ?>" class=" nav-link <?php if ($this->uri->segment(1) == 'dataprofile') {
																							echo "active";
																						}
																						?>">
								<i class="nav-icon fa-solid fa-list"></i>
								<p>Dashboard Profil</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('keuangan') ?>" class=" nav-link <?php if ($this->uri->segment(1) == 'keuangan') {
																						echo "active";
																					}
																					?>">
								<i class="nav-icon fa-solid fa-list"></i>
								<p>Dashboard Keuangan</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('peraturan') ?>" class="nav-link <?php if ($this->uri->segment(1) == 'peraturan') {
																				echo "active";
																			}
																			?>">
						<i class="nav-icon fa-solid fa-book-open"></i>
						<p>
							Peraturan
						</p>
					</a>
				</li>

			</ul>
		</nav>
	</div>
</aside>
<div class="content-wrapper">
	<section class="content">