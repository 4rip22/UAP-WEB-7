<?php 
<<<<<<< HEAD
   require_once(__DIR__ . '/../../header.php');
=======
   require_once('../../header.php'); 
>>>>>>> 4ba610d0688bf022c00fe504db02a3f5b720377e
   $id_dc = $_GET['id_dc'];
?>

<?php if (del_dc($id_dc) > 0) : ?>
   <div class="alert">
      <div class="box">
      <img src="<?=url('Assets/image/berhasil.png')?>" height="68" alt="alert sukses">
			<p>Paket Berhasil Di Hapus</p>
			<button onclick="window.location='http://localhost/CleanCo_Laundry/paket/pkt_dc/pkt_dc.php'" class="btn-alert">Ok</button>
		</div>
   </div>
   <?php else : ?>
   <div class="alert">
      <div class="box">
      <img src="<?=url('Assets/image/gagal.png')?>" height="68" alt="alert gagal">
         <p>Paket Gagal Di Hapus</p>
         <button onclick="window.location='http://CleanCo_Laundry/paket/pkt_dc/pkt_dc.php'" class="btn-alert">Ok</button>
      </div>
   </div>
<?php endif ?>