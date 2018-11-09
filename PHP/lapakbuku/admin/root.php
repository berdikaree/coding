<?php 
class admin{
	
	function __construct(){
			mysql_connect("localhost","root","");
			mysql_select_db("lapakbuku");
		}
	function login($username,$password){
				if (trim($_POST['username'])=='') {
					$eror[]='username';
				}
				if (trim($_POST['password'])=='') {
					$eror[]='password';
				}
				if (isset($eror)) {
					echo "<div id='gagal'><img style='width:16px;height:15px' src='asset/loading/load.gif' alt='loading...' /> Opps, sepertinya ".implode(" dan ", $eror)." anda kosong</div>";
				}
				else{
				$query=mysql_query("select * from admin where username='$username' and password='$password'");
				$row=mysql_fetch_array($query);
				$report=mysql_num_rows($query);
				if ($report>0) {
				session_start();
				$_SESSION['id']=$row['id'];

                                                            echo "<div id='sukses'><img style='width:16px;height:15px' src='asset/loading/load.gif' alt='loading...' /> Login sukses, anda akan segera diarahkan ke halaman utama</div>";
                                            				?>
                                            				<script type="text/javascript">
                                                            window.setTimeout(function(){window.location.href="home.php"},1500);
                                                            
                                            				</script>

                                            				<?php
                                            				}
                                            				else{
                                            				echo "<div id='gagal'><img style='width:16px;height:15px' src='asset/loading/load.gif' alt='loading...' /> Opps, Sepertinya Username atau Password anda salah</div>";
                                            		}}  
            }
            //selesai root login 

         //mulai root kelompok
		

		function tampil_toko(){
		$query=mysql_query("select * from toko order by id desc");
		while($r=mysql_fetch_array($query)){
			$hasil[]=$r;
			}return $hasil;
		}
		function tambah_blog($judul,$kategori,$gambar,$isi_blog,$tgl,$tulisan){
			$s=mysql_query("INSERT INTO blog SET judul='$judul',kategori='$kategori',gambar='$gambar',isi_blog='$isi_blog',tgl='$tgl',tulisan='$tulisan'") or die(mysql_error());
			?>
				<script>
					alert("Artikel Blog Berhasil Di Terbitkan ! :-)");
					window.location.href="home.php?aksi=view_all_post_blog";
				</script>
			<?php
		}
		function tampil_member(){
		$query=mysql_query("select * from pembeli order by id_pembeli desc");
		while($r=mysql_fetch_array($query)){
			$hasil[]=$r;
			}return $hasil;
		}
		function tampil_blog(){
		$query=mysql_query("select * from blog order by id desc");
		while($r=mysql_fetch_array($query)){
			$hasil[]=$r;
			}return $hasil;
		}
		function logout(){
			session_start();
			unset($_SESSION['username']);
			session_destroy();
			header("location:index.php");
			
			}
		function add_blog_katagori($nama_kategori){
			$s=mysql_query("INSERT INTO blog_kategori SET nama_kategori='$nama_kategori'") or die(mysql_error());
			?>
				<script>
					alert("Blog Kategori Berhasil Di Tambahkan ! :-)");
					window.location.href="home.php?aksi=add_new_blog_post";
				</script>
			<?php
		}
		function add_pajak($durasi,$harga_pajak,$catatan){
			$s=mysql_query("INSERT INTO pajak_vendor SET durasi='$durasi',harga_pajak='$harga_pajak',catatan='$catatan' ") or die(mysql_error());
			?>
				<script>
					alert("Data Pajak Berhasil Di Tambahkan");
					window.location.href="home.php?aksi=lihat_data_pajak";
				</script>
			<?php
		}
		function tampil_pajak(){
		$query=mysql_query("select * from pajak_vendor order by id desc");
		while($r=mysql_fetch_array($query)){
			$hasil[]=$r;
			}return $hasil;
		}
		function view_konfirmasi(){
			$query=mysql_query("select * from konfirmasi");
			while($r=mysql_fetch_array($query)){
				$hasil[]=$r;
				}return $hasil;
			}
		function selesai(){
			$query=mysql_query("select * from selesai order by id desc");
			while($r=mysql_fetch_array($query)){
				$hasil[]=$r;
				}return $hasil;
			}
			function konfir($id){
				$y="Y";
				mysql_query("update selesai set konfir='$y' where id='$id'");
				header("location:home.php?aksi=pesan");
				}
				function konfir_kirim($id){
				$k="K";
				mysql_query("update selesai set konfir='$k' where id='$id'");
				header("location:home.php?aksi=pesan");
				}
				function konfir_kirim_kota($id){
				$kk="KK";
				mysql_query("update selesai set konfir='$kk' where id='$id'");
				header("location:home.php?aksi=pesan");
				}
				function konfir_terima($id){
				$t="T";
				mysql_query("update selesai set konfir='$t' where id='$id'");
				header("location:home.php?aksi=pesan");
				}
				function konfir_selesai($id){
				$s="S";
				mysql_query("update selesai set konfir='$s' where id='$id'");
				header("location:home.php?aksi=pesan");
				}
		function bayar_pajak(){
			$query=mysql_query("select * from bayar_pajak");
			while($r=mysql_fetch_array($query)){
				$hasil[]=$r;
				}return $hasil;
			}
			function konfir_bayar($id){
				$y="Y";
				mysql_query("update bayar_pajak set konfir='$y' where id='$id'");
				header("location:home.php?aksi=Pembayaran_pajak");
				}
			function konfir_tenggang($id){
				$t="T";
				mysql_query("update bayar_pajak set konfir='$t' where id='$id'");
				header("location:home.php?aksi=Pembayaran_pajak");
				}
			function transfer_pendapatan_vendor($id_vendor,$tgl_transfer,$pendapatan_asli,$potongan,$jumlah,$catatan){
				$data=mysql_query("INSERT INTO tabungan_vendor SET id_vendor='$id_vendor',tgl_transfer='$tgl_transfer',pendapatan_asli='$pendapatan_asli',potongan='$potongan',jumlah='$jumlah',catatan='$catatan',konfir='N' ") or die(mysql_error());
				?>
				<script>
					alert("Transfer Berhasil");
					window.location.href="home.php?aksi=transfer_pendapatan_vendor";
				</script>		
				<?php
			}

			function lihat_pendapatan_vendor(){
				$query=mysql_query("select * from tabungan_vendor order by id desc");
				while($r=mysql_fetch_array($query)){
					$hasil[]=$r;
					}return $hasil;
			}

			function hapus_toko($id){
				mysql_query("delete from toko where id='$id'");
				?>
				<script type="text/javascript">
					alert("Toko Berhasil Hapus");
					window.location.href="home.php?aksi=toko";
				</script>
				<?php
			}
			function hapus_blog($id){
				mysql_query("delete from blog where id='$id'");
				?>
				<script type="text/javascript">
					alert("Postingan Blog Berhasil Dihapus");
					window.location.href="home.php?aksi=view_all_post_blog";
				</script>
				<?php
			}
			
				
}
?>