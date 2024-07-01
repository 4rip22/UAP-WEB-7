<?php 
	require_once(__DIR__ . '/../../header.php');
<<<<<<< HEAD
> 
=======
	require_once('../../header.php');
>>>>>>> 93cda03074f025a6d169a947c0509fe4bbc48b3c
	$id_ck = $_GET['id_ck'];
?>

<?php if (del_ck($id_ck) > 0) : ?>
   <div class="alert">
      <div class="box">
         <img src="<?=url('Assets/image/berhasil.png')?>" height="68" alt="alert sukses">
			<p>Paket Berhasil Di Hapus</p>
			<button onclick="window.location='http://localhost/UAP-WEB-7/paket/pkt_ck/pkt_ck.php'" class="btn-alert">Ok</button>
		</div>
   </div>
   <?php else: ?>
   <div class="alert">
      <div class="box">
         <img src="<?=url('Assets/image/gagal.png')?>" height="68" alt="alert gagal">
         <p>Paket Gagal Di Hapus</p>
         <button onclick="window.location='http://localhost/UAP-WEB-7/paket/pkt_ck/pkt_ck.php'" class="btn-alert">Ok</button>
      </div>
   </div>
<?php endif ?>