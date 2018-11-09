<?php
session_start(); // membuka atau memulai session
include("config/koneksi.php");
//menyimpan username dan password yang diinputkan user ke suatu variabel

//INPUT USERNAME
//INPUT PASS
$username= $_POST['username'];
$password= $_POST ['password'];
//memeriksa apakah terdapat username di login
$sql ="SELECT * FROM login WHERE username = '".$username."'";
$hasil= mysql_query($sql,$konek);

//memeriksa apakah ada pegawai dengan username = username
if ($record= mysql_fetch_array($hasil))
{ //memeriksa apakah password yang di inputkan benar
	//benar--> password== nama
	if($password==$record['PASSWORD'])
	{
		//CEK DI TABEL GURU
		$sql ="SELECT * FROM GURU WHERE ID_LOGIN = ".$record['ID_LOGIN'];
		$hasil= mysql_query($sql,$konek);
		if ($record1= mysql_fetch_array($hasil))
		{
			$level='guru';
			$_SESSION['SES_GURU']='SES_GURU';
			$_SESSION['NIP']= $record1['NIP'];
			$_SESSION['MAPEL']= $record1['ID_MAPEL'];
			$_SESSION['NAMA']= $record1['NAMA_GURU'];
			$_SESSION['ALAMAT']= $record1['ALAMAT_GURU'];
			$_SESSION['TGL_LAHIR_GURU']= $record1['TGL_LHR_GURU'];
			header('location:guru/media.php');

		}
		else //CEK DI TABEL siswa
		{
			$sql ="SELECT * FROM SISWA WHERE ID_LOGIN = ".$record['ID_LOGIN'];
		$hasil= mysql_query($sql,$konek);
		if ($record2= mysql_fetch_array($hasil))
			{
			$level='siswa';
			$_SESSION['SES_SISWA']='SES_SISWA';
			$_SESSION['NIS']= $record2['NIS'];
			$_SESSION['NAMA']= $record2['NAMA_SISWA'];
			$_SESSION['ALAMAT_SISWA']= $record2['ALAMAT_SISWA'];
			$_SESSION['TGL_LAHIR_SISWA']= $record2['TGL_LAHIR_SISWA'];
			$_SESSION['ALAMAT_WALI']= $record2['ALAMAT_WALI'];
			$_SESSION['NAMA_WALI']= $record2['NAMA_WALI'];
			header('location:siswa/media.php');
			}
			else //CEK DI TABEL walikelas
		{
			$sql ="select * from walikelas where ID_LOGIN = ".$record['ID_LOGIN'];
		$hasil= mysql_query($sql,$konek);
		if ($record4= mysql_fetch_array($hasil))
			{
			$level='walikelas';
			$_SESSION['SES_WALIKELAS']='SES_WALIKELAS';
			$_SESSION['ID_KELAS']= $record4['ID_KELAS'];
			$_SESSION['ID_LOGIN']= $record4['ID_LOGIN'];
			$_SESSION['NAMA_KELAS']= $record4['NAMA_KELAS'];
			header('location:walikelas/media.php');
		}
			else //cek di tabel admin -> jika ada makaa
			{
				$sql ="SELECT * FROM ADMIN WHERE ID_LOGIN = ".$record['ID_LOGIN'];
		$hasil= mysql_query($sql,$konek);
		if ($record3= mysql_fetch_array($hasil))
			{
			$level='admin';
			$_SESSION['SES_ADMIN']='SES_ADMIN';
			$_SESSION['ID_ADMIN']= $record3['ID_ADMIN'];
			$_SESSION['NAMA']= $record3['NAMA'];
			header('location:admin/media_admin.php');
		}
		}
		}
		}
	}

	else //jika password salah/tidak cocok
		echo "password salah";
	}
else // Jika NIK tidak terdaftar/tidak ada pada DB
	echo "DataBase tidak terdaftar";
?>