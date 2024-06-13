<?php 
<<<<<<< HEAD
   require_once(__DIR__ . '/../../header.php');
=======
   require_once('../../header.php');
>>>>>>> 4ba610d0688bf022c00fe504db02a3f5b720377e
   $id_cs = $_GET['id_cs'];   
?>

<?php if (del_cs($id_cs) > 0) : ?>
   <!-- Statement 1 -->
   <div class="alert">
      <div class="box">
      <img src="<?=url('Assets/image/berhasil.png')?>" height="68" alt="alert sukses">
         <p>Paket Berhasil Di Hapus</p>
         <button onclick="window.location='http://localhost/CleanCo_Laundry/paket/pkt_cs/pkt_cs.php'" class="btn-alert">Ok</button>
      </div>
   </div>
   <?php else :?>
      <!-- Statement 2 -->
      <div class="alert">
         <div class="box">
         <img src="<?=url('Assets/image/gagal.png')?>" height="68" alt="alert gagal">
            <p>Paket Gagal Di Hapus</p>
            <button onclick="window.location='http://localhost/CleanCo_Laundry/paket/pkt_cs/pkt_cs.php'" class="btn-alert">Ok</button>
         </div>
      </div>
<?php endif ?>