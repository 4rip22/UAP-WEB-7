<!-- HAPUS KARYAWAN -->
<?php 
	require_once('../header.php');
	$id_user = $_GET['id_user'];
?>

<?php if (del_kary($id_user) > 0) : ?>
	<!-- Statement 1 -->
	<div class="alert">
		<div class="box">
		<img src="<?=url('Assets/image/Sukses.png')?>" height="68" alt="alert sukses">
			<p>Data Berhasil Di Hapus</p>
			<button onclick="window.location='http://localhost/CleanCo_Laundry/karyawan/Karyawan.php'" class="btn-alert">Ok</button>
		</div>
	</div>
	<?php else : ?>
		<!-- Statement 2 -->
		<div class="alert">
			<div class="box">
			<img src="<?=url('Assets/image/Gagal.png')?>" height="68" alt="alert gagal">
				<p>Data Gagal Di Hapus</p>
				<button onclick="window.location='http://localhost/CleanCo_Laundry/karyawan/Karyawan.php'" class="btn-alert">Ok</button>
			</div>
		</div>
<?php endif ?>

    <footer>
		<p>&copy; <span id="tahun"></span> All Rights Reserved.</p>
		<script>
		// mengambil tanggal hari ini
		var now = new Date();
		var tahun = now.getFullYear();
		// menampilkan tahun di dalam elemen HTML
		document.getElementById("tahun").innerHTML = tahun;
		</script>
		
	</footer>