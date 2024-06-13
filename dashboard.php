<?php 
   require_once('header.php'); 
   if (isset($_SESSION['login']) == '') {
      header("Location: login.php");
      exit();
   }
   $jml_karyawan = count(query('SELECT * FROM master LIMIT 20 OFFSET 1'));
?> 



<div id="main" class="main-content">
		<div class="container">
			<div class="baris">
				<div class="selamat-datang">
					<div class="col-header">
						<p class="judul-sm">Selamat Datang Admin<span><?= ucfirst($_SESSION['master']) ?></span></p>
						<h2 class="judul-md">Dashboard</h2>
					</div>

					<div class="col-header txt-right">
						<a href="<?=url('TambahOrder/OrderBaru.php')?>" class="btn-lg bg-primary">+ Order Baru</a>
					</div>	
				</div>
			</div>

			<div class="baris">
				<div class="col col-4">
					<div class="card">
						<div class="card-body">
							<div class="card-panel">
								<div class="panel-header">
									<p>Jumlah Karyawan</p>
									<h2><?= $jml_karyawan ?></h2>
								</div>
								<div class="panel-icon">
									<img src="<?=url('Assets/image/Karyawan.png')?>" alt="karyawan" height="60">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col col-4">
					<div class="card">
						<div class="card-body">
							<div class="card-panel">
								<div class="panel-header">
									<p>Total Order</p>
									<h2><?= jmlOrder(); ?></h2>
								</div>
								
								<div class="panel-icon">
									<img src="<?=url('Assets/image/Order.png')?>" alt="order" height="60">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col col-4">
					<div class="card">
						<div class="card-body">
							<div class="card-panel">
								<div class="panel-header">
									<p>Jumlah Paket Tersedia</p>
									<h2><?= jmlPaket(); ?></h2>
								</div>

								<div class="panel-icon">
									<img src="<?=url('Assets/image/Paket.png')?>" alt="paket" height="60">
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>

			<!-- Daftar Order Cuci Komplit -->
			<div class="baris">
            <div class="col">
               <div class="card">
                  <div class="card-title card-flex">
                     <div class="card-col">
                        <h2>Pesanan Cuci Komplit</h2>	
                     </div>
                  </div>

                  <div class="card-body">
                     <div class="tabel-kontainer">
                        <table class="tabel-transaksi">
                           <thead>
                              <tr>
                                 <th class="sticky">No</th>
                                 <th class="sticky">No.Order</th>
                                 <th class="sticky">Tgl Order</th>
                                 <th class="sticky">Nama Pelanggan</th>
                                 <th class="sticky">Jenis Paket</th>
                                 <th class="sticky">Waktu Kerja</th>
                                 <th class="sticky">Berat (Kg)</th>
                                 <th class="sticky">Action</th>
                              </tr>
                           </thead>

                           <tbody>
                              <?php $cuci_komplit = query('SELECT * FROM tb_order_ck ORDER BY id_order_ck DESC'); 
                                 if (!empty($cuci_komplit)) :?>
                                 <?php 
                                    $no_ck = 1;
                                    foreach($cuci_komplit as $ck) : ?>
                                    <tr>
                                       <td><?= $no_ck; ?></td>
                                       <td><?= $ck['or_ck_number'] ?></td>
                                       <td><?= $ck['tgl_masuk_ck'] ?></td>
                                       <td><?= $ck['nama_pel_ck'] ?></td>
                                       <td><?= $ck['jenis_paket_ck'] ?></td>
                                       <td><?= $ck['wkt_krj_ck'] ?></td>
                                       <td><?= $ck['berat_qty_ck'] . ' Kg' ?></td>
                                       <td>
                                          <a href="<?=url('detailOrder/detail_ck.php?or_ck_number=')?><?=$ck['or_ck_number']?>" class="btn btn-detail">Detail</a>

                                          <a href="<?=url('Pesanan/hapusCk.php?or_ck_number=')?><?=$ck['or_ck_number']?>" onclick="return confirm('Yakin akan menghapus?');" class="btn btn-hapus">Hapus</a>
                                       </td>
                                    </tr>
                                    <?php $no_ck++ ?>
                                 <?php endforeach; ?>
                                 <?php else : ?>
                                    <tr>
                                       <td colspan="8" class="txt-center">Data Tidak Tersedia</td>
                                    </tr>
                              <?php endif?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      

			<!-- Daftar Order Cuci Satuan -->
			<div class="baris">
            <div class="col">
               <div class="card">
                  <div class="card-title card-flex">
                     <div class="card-col">
                        <h2>Pesanan Cuci Satuan</h2>	
                     </div>
                  </div>

                  <div class="card-body">
                     <div class="tabel-kontainer">
                        <table class="tabel-transaksi">
                           <thead>
                              <tr>
                                 <th class="sticky">No</th>
                                 <th class="sticky">No.Order</th>
                                 <th class="sticky">Tgl Order</th>
                                 <th class="sticky">Nama Pelanggan</th>
                                 <th class="sticky">Jenis Paket</th>
                                 <th class="sticky">Waktu Kerja</th>
                                 <th class="sticky">Jml Barang</th>
                                 <th class="sticky">Action</th>
                              </tr>
                           </thead>

                           <tbody>
                              <?php $cuci_satuan = query('SELECT * FROM tb_order_cs ORDER BY id_order_cs DESC');
                                 if (!empty($cuci_satuan)) : ?>
                                    <?php
                                       $no_cs = 1;
                                       foreach($cuci_satuan as $cs) : ?>
                                          <tr>
                                             <td><?= $no_cs ?></td>
                                             <td><?= $cs['or_cs_number'] ?></td>
                                             <td><?= $cs['tgl_masuk_cs'] ?></td>
                                             <td><?= $cs['nama_pel_cs'] ?></td>
                                             <td><?= $cs['jenis_paket_cs'] ?></td>
                                             <td><?= $cs['wkt_krj_cs'] ?></td>
                                             <td><?= $cs['jml_pcs'] ?></td>
                                             <td>
                                                <a href="<?=url('detailOrder/detail_cs.php?or_cs_number=')?><?=$cs['or_cs_number']?>" class="btn btn-detail">Detail</a>

                                                <a href="<?=url('Pesanan/hapusCs.php?or_cs_number=')?><?=$cs['or_cs_number']?>" onclick="return confirm('Yakin akan menghapus?');" class="btn btn-hapus">Hapus</a>
                                             </td>
                                          </tr>
                                       <?php $no_cs++ ?>
                                    <?php endforeach; ?>
                                    
                                    <?php else : ?>
                                       <tr>
                                          <td colspan="8" class="txt-center">Data Tidak Tersedia</td>
                                       </tr>
                                 <?php endif; ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
			</div>

			<!-- Daftar Order Dry Clean -->
			<div class="baris">
            <div class="col">
               <div class="card">
                  <div class="card-title card-flex">
                     <div class="card-col">
                        <h2>Pesanan Dry Clean (Cuci Kering)</h2>	
                     </div>
                  </div>

                  <div class="card-body">
                     <div class="tabel-kontainer">
                        <table class="tabel-transaksi">
                           <thead>
                              <tr>
                                 <th class="sticky">No</th>
                                 <th class="sticky">No.Order</th>
                                 <th class="sticky">Tgl Order</th>
                                 <th class="sticky">Nama Pelanggan</th>
                                 <th class="sticky">Jenis Paket</th>
                                 <th class="sticky">Waktu Kerja</th>
                                 <th class="sticky">Berat (Kg)</th>
                                 <th class="sticky">Action</th>
                              </tr>
                           </thead>

                           <tbody>
                              <?php $dry_clean = query('SELECT * FROM tb_order_dc ORDER BY id_order_dc DESC');
                                 if (!empty($dry_clean)) : ?>
                                 <?php
                                    $no_dc = 1;
                                    foreach($dry_clean as $dc) : ?>
                                       <tr>
                                          <td><?= $no_dc ?></td>
                                          <td><?= $dc['or_dc_number'] ?></td>
                                          <td><?= $dc['tgl_masuk_dc'] ?></td>
                                          <td><?= $dc['nama_pel_dc'] ?></td>
                                          <td><?= $dc['jenis_paket_dc'] ?></td>
                                          <td><?= $dc['wkt_krj_dc'] ?></td>
                                          <td><?= $dc['berat_qty_dc'] . ' Kg' ?></td>
                                          <td>
                                             <a href="<?=url('detailOrder/detail_dc.php?or_dc_number=')?><?= $dc['or_dc_number'] ?>" class="btn btn-detail">Detail</a>

                                             <a href="<?=url('Pesanan/hapusDc.php?or_dc_number=')?><?=$dc['or_dc_number']?>" onclick="return confirm('Yakin akan menghapus?');" class="btn btn-hapus">Hapus</a>
                                          </td>
                                       </tr>
                                    <?php $no_dc++ ?>
                                 <?php endforeach ?>

                                 <?php else : ?>
                                    <tr>
                                       <td colspan="8" class="txt-center">Data Tidak Tersedia</td>
                                    </tr>
                              <?php endif ?>
                           </tbody>
                        </table>
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
