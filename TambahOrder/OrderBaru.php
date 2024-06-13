<?php require_once('../header.php')?>

   <div class="main-content" id="id_order">
      <div class="container">
         <div class="baris">
            <div class="col mt-2">
               <div class="card">
                  <div class="card-title card-flex">
                     <div class="card-col">
                        <h2>Tambah Order Baru</h2>	
                     </div>
                     
                     <div class="card-col txt-right">
                        <a href="<?=url('dashboard.php')?>" class="btn-xs bg-primary">Kembali</a>
                     </div>
                  </div>

                  <div class="card-body mt-2">
                     <div class="col">
                        <div class="order-sub-judul txt-center">
                           <h3 class="mb-1">Pilih Paket</h3>
                        </div>

                        <div class="container-paket">
                           <div class="col-paket">
                              <a href="<?=url('TambahOrder/OrderCk.php')?>" class="paket">
<<<<<<< HEAD
                                 <img src="<?=url('Assets/image/cuci_komplit.png')?>" alt="cuci komplit" width="160">
=======
                                 <img src="<?=url('_assets/img/cuci_komplit.png')?>" alt="cuci komplit" width="160">
>>>>>>> fa22fb525ed78f8a3ab6fbf2ab6614ee391efb03
                                 <h4>Cuci Komplit</h4>
                              </a>
                           </div>

                           <div class="col-paket">
                              <a href="<?=url('TambahOrder/OrderDc.php')?>" class="paket">
<<<<<<< HEAD
                                 <img src="<?=url('Assets/image/dry_clean.png')?>" alt="dry clean" width="160">
=======
                                 <img src="<?=url('_assets/img/dry_clean.png')?>" alt="dry clean" width="160">
>>>>>>> fa22fb525ed78f8a3ab6fbf2ab6614ee391efb03
                                 <h4>Dry Clean</h4>
                              </a>
                           </div>

                           <div class="col-paket">
                              <a href="<?=url('TambahOrder/OrderCs.php')?>" class="paket">
<<<<<<< HEAD
                                 <img src="<?=url('Assets/image/kemeja.png')?>" alt="cuci satuan" width="160">
=======
                                 <img src="<?=url('_assets/img/kemeja_2.png')?>" alt="cuci satuan" width="160">
>>>>>>> fa22fb525ed78f8a3ab6fbf2ab6614ee391efb03
                                 <h4>Cuci Satuan</h4>
                              </a>
                           </div>
                        </div>
                     </div>
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