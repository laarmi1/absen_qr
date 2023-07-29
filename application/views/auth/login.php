<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<title>E - Absensi | <?= $title; ?></title>
	<meta content="Responsive admin theme build on top of Bootstrap 4" name="description" />
	<meta content="Themesdesign" name="author" />
	<link rel="shortcut icon" href="<?= base_url('assets/') ?>images/favicon.ico">

	<link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/') ?>css/metismenu.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/') ?>css/icons.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet" type="text/css">

	<style>
		/* CSS for the background image */
		.accountbg {
			background: url('<?= base_url('assets/img/bg.jpg') ?>') center center;
			background-size: cover;
			position: absolute;
			height: 100%;
			width: 100%;
			top: 0;
			left: 0;
		}
	</style>
</head>

<body>

	<!-- Begin page -->
	<div class="accountbg"></div>
	<div class="wrapper-page">
		<div class="card card-pages shadow-none">

			<div class="card-body">
				<div class="text-center m-t-0 m-b-15">
					<a href="index.html" class="logo logo-admin"><img src="<?= base_url('assets/') ?>assets/images/logo-dark.png" alt="" height="24"></a>
				</div>
				<h5 class="font-18 text-center">Login <br> E-Absensi QR</h5>
				<h2 class="font-30 text-center">KOPERASI PRODUSEN BINTANG LAUT BANDA</h2>
				<br>
				<form action="<?= base_url('auth') ?>" method="post" class="user">
					<div class="form-group">
						<div class="col-12">
							<label>Username</label>
							<input class="form-control" name="username" type="text" placeholder="username">
							<?= form_error('username', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-12">
							<label>Password</label>
							<input class="form-control" name="password" type="password" placeholder="Password">
							<?= form_error('password', '<small class="text-danger ml-3 mt-1">', '</small>'); ?>
						</div>
					</div>

					<div class="form-group">
						<div class="col-12">
							<div class="checkbox checkbox-primary">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label" for="customCheck1"> Remember me</label>
								</div>
							</div>
						</div>
					</div>

					<div class="form-group text-center m-t-20">
						<div class="col-12">
							<button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log
								In</button>
						</div>
					</div>


				</form>
			</div>

		</div>
	</div>
	<!-- END wrapper -->

	<!-- jQuery  -->
	<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/metismenu.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/jquery.slimscroll.js"></script>
	<script src="<?= base_url('assets/') ?>js/waves.min.js"></script>

	<!-- App js -->
	<script src="<?= base_url('assets/') ?>js/app.js"></script>
	<!-- <script src="<?php echo base_url('assets/') ?>alert.js"></script>
	<?php echo "<script>" . $this->session->flashdata('message') . "</script>" ?> -->
</body>

</html>