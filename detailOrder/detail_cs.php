<?php 
   require_once('../header.php'); 
   $no_cs = $_GET['or_cs_number'];
   $data = query("SELECT * FROM tb_order_cs WHERE or_cs_number = '$no_cs'")[0];
?>

<?php if (isset($_POST['bayar_ck'])) : ?>
   <script>
      window.location="http://localhost/CleanCo_Laundry/detailOrder/bayar_cs.php?or_cs_number=<?=$no_cs?>"
   </script>
<?php endif ?>

   <div id="detail_cs" class="main-content">
      <div class="container">
         <div class="baris">
            <div class="col mt-2">
               <div class="card-md">
                  <div class="card-title card-flex">
                     <div class="card-col">
                        <h2>Detail Order</h2>	
                     </div>

                     <div class="card-col txt-right">
                        <h3 class="no-order"><small>No Order : </small><?= $data['or_cs_number']?></h3>	
                     </div>
                  </div>

                  <div class="card-body">
                     <form action="" method="post">
                        <input type="hidden" name="or_cs_number" value="<?=$data['or_cs_number']?>">
                        <div class="jdl-or">
                           <h4>Customer</h4>
                        </div>
                        <table class="tb-detail_customer">   
                           <tr>
                              <th>Nama</th>
                              <td><input type="text" name="nama_pel_cs" disabled value="<?=$data['nama_pel_cs']?>"></td>
                           </tr>

                           <tr>
                              <th>Nomor Telepon</th>
                              <td><input type="text" name="no_telp_cs" disabled value="<?=$data['no_telp_cs']?>"></td>
                           </tr>

                           <tr>
                              <th>Alamat</th>
                              <td>
                                 <textarea name="alamat_cs" disabled class="txt-area">
                                    <?=$data['alamat_cs']?>
                                 </textarea>
                              </td>
                           </tr>

                           <tr>
                              <th>Order Masuk</th>
                              <td><input type="text" name="tgl_masuk_cs" disabled value="<?=$data['tgl_masuk_cs']?>"></td>
                           </tr>

                           <tr>
                              <th>Diambil Pada</th>
                              <td><input type="text" name="tgl_keluar_cs" disabled value="<?=$data['tgl_keluar_cs']?>"></td>
                           </tr>
                           
                           <tr>
                              <th>Durasi Kerja</th>
                              <td><input type="text" name="wkt_krj_cs" disabled value="<?=$data['wkt_krj_cs']?>"></td>
                           </tr>

                           <tr>
                              <th>Jenis Paket</th>
                              <td><input type="text" name="jenis_paket_cs" disabled value="<?=$data['jenis_paket_cs']?>"></td>
                           </tr>
                        </table>

                        <div class="mt-1"></div>
                        
                        <div class="jdl-or">
                           <h4>Order</h4>
                        </div>
                        
                        <table class="tb-detail_order">   
                           <tr>
                              <th>Berat (Kg)</th>
                              <th>Harga Per-Kg</th>
                              <th>Total Bayar</th>
                           </tr>

                           <tr>
                              <td><input type="text" name="jml_pcs" disabled value="<?=$data['jml_pcs']?>"></td>
                              <td><input type="text" name="harga_perpcs" disabled value="<?= 'Rp. ' . $data['harga_perpcs']?>"></td>
                              <td><input type="text" name="tot_bayar" disabled value="<?= 'Rp. ' . $data['tot_bayar']?>"></td>
                           </tr>
                        </table>

                        <div class="details">
                           <h4 class="mb-01">Keterangan:</h4>
                           <p class="lead">
                              <textarea name="keterangan_cs" disabled class="txt-area">
                                 <?=$data['keterangan_cs']?>
                              </textarea>
                           </p>
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