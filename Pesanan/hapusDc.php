<?php 
	require_once('../header.php');
	$dc_number = $_GET['or_dc_number'];
?>

<?php if (del_or_dc($dc_number) > 0) : ?>
	<!-- Statement 1 -->
	<div class="alert">
		<div class="box">
		<img src="<?=url('Assets/image/Sukses.png')?>" height="68" alt="alert sukses">
			<p>Data Berhasil Di Hapus</p>
			<button onclick="window.location='http://localhost/CleanCo_Laundry/dashboard.php'" class="btn-alert">Ok</button>
		</div>
	</div>
	<?php else : ?>
		<!-- Statement 2 -->
		<div class="alert">
			<div class="box">
			<img src="<?=url('Assets/image/Gagal.png')?>" height="68" alt="alert gagal">
				<p>Data Gagal Di Hapus</p>
				<button onclick="window.location='http://localhost/CleanCo_Laundry/dashboard.php'" class="btn-alert">Ok</button>
			</div>
		</div>
<?php endif ?>