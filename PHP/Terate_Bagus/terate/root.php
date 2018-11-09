<?php
class data{
		function __construct(){
				mysql_connect("localhost","root","");
				mysql_select_db("db_terate");
			}
		function login($username,$password){
			$query=mysql_query("select * from pembeli where username='$username' and password='$password'");
			$check=mysql_num_rows($query);
			$data=mysql_fetch_array($query);
			if($check>0){
				session_start();
				$_SESSION['pembeli']=$data['username'];
				$_SESSION['id_pembeli']=$data['id_pembeli'];
				header("location:index.php");
				}
			else{
				?>
                <script>
                alert("login gagal, mungkin username atau password anda salah");
				window.location.href="login.php";
                </script>
				<?php
				}
			}
		function daftar_pelanggan($username,$nama_lengkap,$email,$password,$alamat,$provinsi,$kabupaten,$kecamatan,$kode_pos,$no_telp){
			$data=mysql_query("INSERT into pembeli SET username='$username',nama_lengkap='$nama_lengkap',email='$email',password='$password',alamat='$alamat',provinsi='$provinsi',kabupaten='$kabupaten',kecamatan='$kecamatan',kode_pos='$kode_pos',no_telp='$no_telp'") or die(mysql_error());
				?>
					<script>
						alert("Selamat Bergabung & Selamat Datang Di TERATE STORE");
						window.location.href="index.php";
					</script>
				<?php
			}
		function tampil_produk_elektronik_list(){
			$query=mysql_query("SELECT * from produk where kelompok='elektronik' order by id desc");
				while($r=mysql_fetch_array($query)){
					?>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6><?php echo $r['diskon']; ?></h6></div>
							<a href="single.html"><img src="admin/<?php echo $r['gambar'] ?>" class="img-responsive" alt="img" style="width: 200px; height: 150px;"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html"><?php echo $r['nama_produk']; ?></a></h5> 
								<h6>Rp.<?php echo number_format($r['harga'],0,',','.'); ?></h6> 
								<form action="#" method="post">
									<input type="hidden" name="cmd" value="_cart"/>
									<input type="hidden" name="add" value="1"/> 
									<input type="hidden" name="w3ls_item" value="Queen Size Bed"/> 
									<input type="hidden" name="amount" value="250.00"/> 
									<button type="submit" class="w3ls-cart pw3ls-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to cart</button>
								</form>
							</div>
						</div>
					</div>
					<?php
				}
		}
			function tampil_produk_rekomendasi(){
			$query=mysql_query("SELECT * from produk where kelompok='pakaian' order by id desc");
				while($r=mysql_fetch_array($query)){
					?>
					<div class="item">
						<div class="glry-w3agile-grids agileits">
							<div class="new-tag"><h6><?php echo $r['diskon']; ?></h6></div>
							<a href="products1.html"><img src="admin/<?php echo $r['gambar'] ?>" alt="img"></a>
							<div class="view-caption agileits-w3layouts">           
								<h4><a href="products1.html"><?php echo $r['nama_produk']; ?></a></h4>
	
								<h5><?php echo $r['harga']; ?></h5>
								<a href="detail.php?id_barang=<?php echo $r['id'] ?>"><button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus"></i> Beli</button></a>
							</div>        
						</div> 
					</div>
					<?php
				}
		}
		function tampil_produk_elektronik(){
				$query=mysql_query("SELECT * from produk where kategori='Elektronik' order by id desc LIMIT 10");
				while($r=mysql_fetch_array($query)){
					?>
						<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="elektronik.php"><img src="admin/<?php echo $r['gambar'] ?>" alt="img" style="width: 200px; height: 200px;"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="elektronik.php" style="color: #fff"><?php echo $r['nama_produk']; ?></a></h4>
					
												<h5 style="float: left;">Rp.<?php echo number_format($r['harga'],0,',','.'); ?></h5>
												<a href="detail.php?id_barang=<?php echo $r['id'] ?>"><button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus"></i> Beli</button></a>
											</div>         
										</div>  
						</div>
					<?php
				}
			}
			function tampil_produk_olahraga(){
				$query=mysql_query("SELECT * from produk where kelompok='olahraga' order by id desc LIMIT 10");
				while($r=mysql_fetch_array($query)){
					?>
						<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="detail.php?id_barang=<?php echo $r['id'] ?>"><img src="admin/<?php echo $r['gambar'] ?>" alt="img" style="width: 200px; height: 200px;"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="products.html" style="color: #fff"><?php echo $r['nama_produk']; ?></a></h4>
					
												<h5 style="float: left;">Rp.<?php echo number_format($r['harga'],0,',','.'); ?></h5>
												<a href="detail.php?id_barang=<?php echo $r['id'] ?>"><button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus"></i> Beli</button></a>
											</div>         
										</div>  
						</div>
					<?php
				}
			}
		function tampil_produk_pakaian(){
				$query=mysql_query("SELECT * from produk where kelompok='pakaian' order by id desc LIMIT 5");
				while($r=mysql_fetch_array($query)){
					?>
						<div class="item">
										<div class="glry-w3agile-grids agileits"> 
											<a href="detail.php?id_barang=<?php echo $r['id'] ?>"><img src="admin/<?php echo $r['gambar'] ?>" alt="img" style="width: 200px; height: 200px;"></a>
											<div class="view-caption agileits-w3layouts">           
												<h4><a href="fashion.php" style="color: #fff"><?php echo $r['nama_produk']; ?></a></h4>
					
												<h5 style="float: left;">Rp.<?php echo number_format($r['harga'],0,',','.'); ?></h5>
												
												<a href="detail.php?id_barang=<?php echo $r['id'] ?>"><button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus"></i> Beli</button></a>
			
											</div>         
										</div>  
						</div>
					<?php
				}
			}

		function tampil_produk_fashion(){
			$query=mysql_query("SELECT * from produk where kelompok='pakaian' order by id desc");
				while($r=mysql_fetch_array($query)){
					?>
					<div class="col-md-3 product-grids">
						<div class="agile-products">
							<div class="new-tag"><h6><?php echo $r['diskon']; ?></h6></div>
							<a href="single.html"><img src="admin/<?php echo $r['gambar'] ?>" class="img-responsive" alt="img" style="width: 200px; height: 150px;"></a>
							<div class="agile-product-text">              
								<h5><a href="single.html"><?php echo $r['nama_produk']; ?></a></h5> 
								<h6>Rp.<?php echo number_format($r['harga'],0,',','.'); ?></h6> 
				
									<a href="detail.php?id_barang=<?php echo $r['id'] ?>><button type="submit" class="w3ls-cart" ><i class="fa fa-cart-plus" aria-hidden="true"></i> Beli</button></a>
								
							</div>
						</div>
					</div>
					<?php
				}
		}
		function tampil_pro(){
				$query=mysql_query("select * from produk");
				while($r=mysql_fetch_array($query)){
					$hasil[]=$r;
					}return $hasil;
			}
		function get_one($id_barang){
			$query=mysql_query("select * from produk where id='$id_barang'");
			$aray=mysql_fetch_array($query);
			return $aray;
			}
		function beli($id_pembeli,$id_barang,$nama_produk,$gambar,$qty,$harga,$kategori,$keterangan,$jasa_pengiriman){
			$query=mysql_query("INSERT into produk_temp set id_pembeli='$id_pembeli',id_produk='$id_barang',nama_produk='$nama_produk',harga='$harga',total_harga='$harga',gambar='$gambar',qty_beli='1',qty_asli='$qty',kategori='$kategori',ket='$keterangan',jasa_pengiriman='$jasa_pengiriman'");
			$qtyy=$qty-1;
			mysql_query("update produk set qty='$qtyy' where id='$id_barang'");
			header('location:checkout.php');
			}
		function produk_temp($id_pembeli){
			$data=mysql_query("select * from produk_temp where id_pembeli='$id_pembeli'");
			while($r=mysql_fetch_array($data)){
				$hasil[]=$r;
				}return $hasil;
			}
		function temp_jumlah($id_pembeli){
			$data=mysql_query("select * from produk_temp where id_pembeli='$id_pembeli'");
			$row=mysql_num_rows($data);
			return $row;
			}
		function logout(){
			session_start();
			unset($_SESSION['pembeli']);
			?>
				<script>
					alert("Anda Berhasil Logout");
					window.location.href="index.php"
				</script>
			<?php
			}
		function batalkan($id){
			$data=mysql_query("select * from produk_temp where id='$id'");
			$balik=mysql_fetch_array($data);
			$qty=$balik['qty_asli']+$balik['qty_beli'];
			mysql_query("update produk set qty='$qty' where id='".$balik['id_produk']."'");
			mysql_query("delete from produk_temp where id='$id'");
			header("location:checkout.php");
			
			}
		function qtytambah($id,$id_produk,$qty,$harga){
			
			$qtyy=$qty+1;
			$qty2=$qtyy-1;
			$harga2=$harga*$qtyy;
			$tambah=mysql_query("update produk_temp set qty_beli='$qtyy',qty_asli='$qty2',total_harga='$harga2' where id='$id'");
			$produk=mysql_query("select * from produk where id='$id_produk'");
			$ganti=mysql_fetch_array($produk);
			$qtyproduk=$ganti['qty']-1;
			mysql_query("update produk set qty='$qtyproduk' where id='$id_produk'");
			header("location:checkout.php");
			}
		function qtykurang($id,$id_produk,$qty,$harga){
			
			$qtyy=$qty-1;
			$qty2=$qtyy+1;
			$harga2=$harga*$qtyy;
			$tambah=mysql_query("update produk_temp set qty_beli='$qtyy',qty_asli='$qty2',total_harga='$harga2' where id='$id'");
			$produk=mysql_query("select * from produk where id='$id_produk'");
			$ganti=mysql_fetch_array($produk);
			$qtyproduk=$ganti['qty']+1;
			mysql_query("update produk set qty='$qtyproduk' where id='$id_produk'");
			header("location:checkout.php");
			}
		function total_bayar($id_pembeli){
			$query=mysql_query("select sum(total_harga) as total from produk_temp where id_pembeli='$id_pembeli'");
			$fetch=mysql_fetch_array($query);
			$total=$fetch[total];
			return $total;
			}
		function pilih_orang($id_pembeli){
			$query=mysql_query("select * from pembeli where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['alamat'];
						}
		function pilih_orang_kabupaten($id_pembeli){
			$query=mysql_query("select * from pembeli where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['kabupaten'];
						}
		function pilih_orang_kecamatan($id_pembeli){
			$query=mysql_query("select * from pembeli where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['kecamatan'];
						}
		function pilih_orang_provinsi($id_pembeli){
			$query=mysql_query("select * from pembeli where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['provinsi'];
						}
		function pilih_orang_kode_pos($id_pembeli){
			$query=mysql_query("select * from pembeli where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['kode_pos'];
						}
		function pilih_orang_no_telp($id_pembeli){
			$query=mysql_query("select * from pembeli where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['no_telp'];
						}
		function pilih_orang_jasa_pengiriman($id_pembeli){
			$query=mysql_query("select * from produk_temp where id_pembeli='$id_pembeli'");
			$aray=mysql_fetch_array($query);
			return $aray['jasa_pengiriman'];
						}
		function selesaibelanja($id_pembeli,$nama,$jumlah_barang,$jumlah_bayar,$tanggal_beli,$alamat,$kabupaten,$kecamatan,$provinsi,$kode_pos,$no_telp,$jasa_pengiriman){
			if($jumlah_bayar==0){ 
			?>
					 <script>
         alert("Keranjang anda masih kosong");
		 window.location.href="index.php";
         </script>
			<?php
			}else{
			$query=mysql_query("INSERT into selesai set id_pembeli='$id_pembeli',nama='$nama',jumlah_barang='$jumlah_barang',jumlah_bayar='$jumlah_bayar',tanggal_beli='$tanggal_beli',alamat='$alamat',kabupaten='$kabupaten',kecamatan='$kecamatan',provinsi='$provinsi',kode_pos='$kode_pos',no_telp='$no_telp',jasa_pengiriman='$jasa_pengiriman',konfir='N'");
			mysql_query("delete from produk_temp where id_pembeli='$id_pembeli'");
			$rand=rand();
			header("location:finish.php?nama=$nama&jumlah_barang=$jumlah_barang&tanggal_beli=$tanggal_beli&alamat=$alamat&kabupaten=$kabupaten&kecamatan=$kecamatan&provinsi=$provinsi&kode_pos='$kode_pos'&no_telp='$no_telp'&jasa_pengiriman='$jasa_pengiriman'&bayar=$jumlah_bayar&kode=$rand");
			
			}
			}
		function konfirmasi($kode_pembelian,i$id_vendor,$nama_bank,$tgl,$pesan,$gambar){
			$s=mysql_query("INSERT INTO konfirmasi set kode_pembelian='$kode_pembelian',id_vendor='$id_vendor',nama_bank='$nama_bank',tgl='$tgl',pesan='$pesan',gambar='$gambar' ");
			?>
				<script type="text/javascript">
					alert("Anda Telah Berhasil Melakukan Konfirmasi Pembayaran");
					window.location.href="index.php"
				</script>
			<?php
		}
		function selesai($id){
			$query=mysql_query("select * from selesai where id_pembeli='$id'");
			while($r=mysql_fetch_array($query)){
				$hasil[]=$r;
				}return $hasil;
			}
	
	}
 ?>