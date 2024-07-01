<?php require_once('../header.php'); ?>
   
<div id="paket" class="main-content">
   <div class="container">
      <div class="baris">
         <div class="col mt-2">
            <div class="card">
               <div class="card-title card-flex">
                  <div class="card-col">
                     <h2>Daftar Paket Tersedia</h2>	
						</div>
						
						<div class="card-col txt-right">
							<a href="<?=url('dashboard.php')?>" class="btn-xs bg-primary">Kembali</a>
						</div>
               </div>

               <div class="card-body mt-2">
                  <div class="col">
							<div class="container-paket">
								<div class="col-paket">
									<a href="<?=url('paket/pkt_ck/pkt_ck.php')?>" class="paket">
										<img src="<?=url('Assets/image/cuci_komplit.png')?>" alt="cuci komplit" width="160">
										<h4>Daftar Paket Cuci Komplit</h4>
									</a>
								</div>

								<div class="col-paket">
									<a href="<?=url('paket/pkt_dc/pkt_dc.php')?>" class="paket">
										<img src="<?=url('Assets/image/dry_clean.png')?>" alt="dry clean" width="160">
										<h4>Daftar Paket Dry Clean</h4>
									</a>
								</div>

								<div class="col-paket">
									<a href="<?=url('paket/pkt_cs/pkt_cs.php')?>" class="paket">
										<img src="<?=url('Assets/image/kemeja.png')?>" alt="cuci satuan" width="160">
										<h4>Daftar Paket Cuci Satuan</h4>
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