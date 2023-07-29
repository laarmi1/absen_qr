	<div class="navbar-custom">
		<div class="container-fluid">

			<div id="navigation">

				<!-- Navigation Menu-->
				<ul class="navigation-menu">

					<li class="has-submenu">
						<a href="<?= base_url('User') ?>"><i class="icon-accelerator"></i> Dashboard</a>
					</li>

					<li class="has-submenu">
						<a href="#"><i class="icon-pencil-ruler"></i> Master Absensi <i class="mdi mdi-chevron-down mdi-drop"></i></a>
						<ul class="submenu megamenu">
							<li>
								<ul>
									<li><a href="<?= base_url('Absen/getAbsenId/' . $this->session->userdata('username')) ?>">Data Absensi</a></li>
									<li><a href="<?= base_url('Absen/cetakqr/' . $this->session->userdata('nip')) ?>">Cetak QR</a></li>


								</ul>
							</li>
						</ul>
					</li>
					<li class="has-submenu">
						<a href="#"><i class="icon-pencil-ruler"></i> Rekap <i class="mdi mdi-chevron-down mdi-drop"></i></a>
						<ul class="submenu megamenu">
							<li>
								<ul>
									<li><a href="<?= base_url('Absen/rekapAbsensiPerKaryawan/'. $this->session->userdata('username')); ?>">Rekap Absensi</a></li>

							</li>
						</ul>
					</li>

				</ul>
				<!-- End navigation menu -->
			</div>
			<!-- end #navigation -->
		</div>
		<!-- end container -->
	</div>
