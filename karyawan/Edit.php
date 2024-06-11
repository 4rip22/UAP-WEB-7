<?php 
	require_once('../header.php'); 
	$id_user = $_GET['id_user'];
	$update = query("SELECT * FROM master WHERE id_user='$id_user'")[0];
?>

<?php if (isset($_POST['update'])) : ?>
	<?php if (update_kary($_POST) > 0) :?>
		<!-- Statement 1 -->
		<div class="alert">
			<div class="box">
				<img src="<?=url('Assets/image/Sukses.png')?>" height="68" alt="alert sukses">
				<p>Data Berhasil Di Ubah</p>
				<button onclick="window.location='http://localhost/CleanCo_Laundry/karyawan/Karyawan.php' "class="btn-alert">Ok</button>
			</div>
		</div>

		<?php else : ?>
			<!-- Statement 2 -->
			<div class="alert">
				<div class="box">
				<img src="<?=url('Assets/image/Gagal.png')?>" height="68" alt="alert gagal">
					<p>Data Gagal Di Ubah</p>
					<button onclick="window.location='http://localhost/CleanCo_Laundry/karyawan/Karyawan.php'" class="btn-alert">Ok</button>
				</div>
			</div>
	<?php endif ?>
<?php endif ?>

<div id="tambah_karyawan" class="main-content">
	<div class="container">
		<div class="baris">
			<div class="col mt-2">
				<div class="card">
					<div class="card-title card-flex">
						<div class="card-col">
							<h2>Update Data Karyawan</h2>	
						</div>

						<div class="card-col txt-right">
							<a href="karyawan.php" class="btn-xs bg-primary">Kembali</a>
						</div>
					</div>

					<div class="card-body">
						<form action="" method="post" class="form-input">
							<input type="hidden" name="id_user" value="<?= $update['id_user'] ?>">
							<input type="hidden" name="level" value="<?= $update['level'] ?>">
							<div class="form-grup">
								<label for="nama">Nama Karyawan</label>
								<input type="text" name="nama" placeholder="Nama lengkap" autocomplete="off" id="nama" value="<?= $update['nama'] ?>">
							</div>

							<div class="form-grup">
								<label for="username">Username</label>
								<input type="text" name="username" placeholder="Username" autocomplete="off" id="username" value="<?= $update['username'] ?>">
							</div>

							<div class="form-grup">
								<label for="email">Email</label>
								<input type="text" name="email" placeholder="Email" autocomplete="off" id="email" value="<?= $update['email'] ?>">
							</div>

							<div class="form-grup ">
								<button type="submit" class="mt-1" name="update">Update Data</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

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