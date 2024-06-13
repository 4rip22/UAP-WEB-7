<?php
require_once ('fungsi.php');
?>

<!DOCTYPE html>
<html>

<head>
	<title>CleanCo Laundry | Dashboard</title>
	<link rel="stylesheet" href="<?= url('Assets/css/style.css') ?>">
	<link rel="shortcut icon" href="<?= url('Assets/image/Logo_CleanCo.png') ?>" type="image/x-icon">
</head>

<body>

	<header>
		<nav>
			<div class="logo">
				<a href="<?= url('dashboard.php') ?>">
					<img src="<?= url('Assets/image/Logo_CleanCo.png') ?>" alt="CleanCo Laundry Logo">
				</a>
			</div>
		</nav>
		<div id="nav-mini">

			<a href="<?= url('riwayat_transaksi/riwayat.php') ?>" class="link-nav">Riwayat Transaksi</a>
			<a href="<?= url('karyawan/Karyawan.php') ?>" class="link-nav">Manage Karyawan</a>
			<a href="<?= url('paket/paket.php') ?>" class="link-nav">Daftar Layanan</a>

		</div>
	</header>

</body>

</html>