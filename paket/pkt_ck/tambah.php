<<<<<<< HEAD
<?php require_once(__DIR__ . '/../../header.php'); ?>
=======
<?php require_once('../../header.php') ?>
>>>>>>> 4ba610d0688bf022c00fe504db02a3f5b720377e
   
   <?php if (isset($_POST['tambah'])) : ?>
      <?php if (add_ck($_POST) > 0) : ?>
         <!-- Statement 1 -->
         <div class="alert">
				<div class="box">
            <img src="<?=url('Assets/image/berhasil.png')?>" height="68" alt="alert sukses">
					<p>Paket Berhasil Di Tambahkan</p>
<<<<<<< HEAD
					<button onclick="window.location='http://localhost/UAP-WEB-7/paket/pkt_ck/pkt_ck.php'" class="btn-alert">Ok</button>
=======
<<<<<<< HEAD
					<button href="paket" onclick="window.location='http://localhost/rumah_laundry/paket/pkt_ck/pkt_ck.php'" class="btn-alert">Ok</button>
=======
					<button onclick="window.location='http://localhost/CleanCo_Laundry/paket/pkt_ck/pkt_ck.php'" class="btn-alert">Ok</button>
>>>>>>> 4ba610d0688bf022c00fe504db02a3f5b720377e
>>>>>>> 501bbf226975e4f1649318d299be7c325c5e6327
				</div>
         </div>
         
         <?php else : ?>
         <!-- Statement 2 -->
         <div class="alert">
            <div class="box-red">
            <img src="<?=url('Assets/image/gagal.png')?>" height="68" alt="alert gagal">
               <p>Paket Gagal Di Tambahkan</p>
               <button onclick="window.location='http://localhost/UAP-WEB-7/paket/pkt_ck/pkt_ck.php'" class="btn-alert">Ok</button>
            </div>
         </div>
      <?php endif ?>      
   <?php endif ?>

   <div id="tambah_paket_ck" class="main-content">
      <div class="container">
         <div class="baris">
            <div class="col mt-2">
               <div class="card">
                  <div class="card-title card-flex">
                     <div class="card-col">
                        <h2>Tambah Paket Cuci Komplit</h2>	
                     </div>
                     <div class="card-col txt-right">
                        <a href="<?=url('paket/pkt_ck/pkt_ck.php')?>" class="btn-xs bg-primary">Kembali</a>
                     </div>
                  </div>

                  <div class="card-body">
                     <form action="" method="post" class="form-input">
                        <div class="form-grup">
                           <label for="nama">Nama Paket</label>
                           <input type="text" name="nama_paket_ck" placeholder="Nama paket" autocomplete="off" id="nama" required>
                        </div>

                        <div class="form-grup">
                           <label for="wk">Waktu Kerja</label>
                           <input type="text" name="waktu_kerja_ck" placeholder="Durasi Kerja" autocomplete="off" id="wk" required>
                        </div>

                        <div class="form-grup">
                           <label for="berat">Berat Min (Kg)</label>
                           <input type="text" name="kuantitas_ck" placeholder="Berat per-Kg" autocomplete="off" id="berat" required>
                        </div>

                        <div class="form-grup">
                           <label for="tarif">Tarif</label>
                           <input type="text" name="tarif_ck" placeholder="Harga Paket" autocomplete="off" id="tarif" required>
                        </div>

                        <div class="form-grup ">
                           <button type="submit" class="mt-1" name="tambah">Tambah</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<<<<<<< HEAD
=======

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
>>>>>>> 4ba610d0688bf022c00fe504db02a3f5b720377e
