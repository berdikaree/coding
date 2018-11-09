<?php
include "../config/koneksi.php";

function Jumlah($x)
{
$jumlah="select sum(nilai) from nilai where NIS='2513/334.063'";
$hasill= mysql_query($jumlah, $konek);
$jumlah= mysql_fetch_array($hasill);
}	
function ketNilai($nilai, $kkm)
{
	if(!empty($nilai))
	{
		if ($nilai >= $kkm)
		return "Tuntas";
		else
		return "Tidak Tuntas";
	}
	else
		return "Tidak Tuntas";
}
function Terbilang($x)
{
  $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  if ($x < 12)
    return " " . $abil[$x];
  elseif ($x < 20)
    return Terbilang($x - 10) . " belas";
  elseif ($x < 100)
    return Terbilang($x / 10) . " puluh" . Terbilang($x % 10);
  elseif ($x < 200)
    return " Seratus" . Terbilang($x - 100);
  elseif ($x < 1000)
    return Terbilang($x / 100) . " ratus" . Terbilang($x % 100);
  elseif ($x < 2000)
    return " seribu" . Terbilang($x - 1000);
  elseif ($x < 1000000)
    return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000);
  elseif ($x < 1000000000)
    return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000);
  elseif ($x < 1000000000000)
    return Terbilang($x / 1000000000) . " miliyar" . Terbilang($x % 1000000000);
  
}

function hari_ini()
{
$tanggal=date("d");
$tahun=date("Y");
$bulan = nama_bulan(date("m"));
return $tanggal ." ". $bulan ." ". $tahun;
}

function nama_bulan($bulan){
	Switch ($bulan){
	case 1 : $bulan="Januari";
	Break;
	case 2 : $bulan="Februari";
	Break;
	case 3 : $bulan="Maret";
	Break;
	case 4 : $bulan="April";
	Break;
	case 5 : $bulan="Mei";
	Break;
	case 6 : $bulan="Juni";
	Break;
	case 7 : $bulan="Juli";
	Break;
	case 8 : $bulan="Agustus";
	Break;
	case 9 : $bulan="September";
	Break;
	case 10 : $bulan="Oktober";
	Break;
	case 11 : $bulan="November";
	Break;
	case 12 : $bulan="Desember";
	Break;
}
return $bulan;
}


//echo hari_ini();
//echo Terbilang(87);

function Nama($namadepan, $namabelakang){
	
	echo "Nama Saya = " . $namadepan ." " .$namabelakang;
}

//$data = R::GetAll("select b.NAMA_SISWA, a.nilai as NILAI, a.NIS from nilai a, siswa b where a.NIS = b.NIS");

//echo "<table class=\"bordered highlight\"><thead><tr  class=\"cyan lighten-5\"><td>NIS</td><td>NAMA</td><td>NILAI</td><td>NILAI</td></tr></thead><tbody>";
	//foreach( $data as $nilai ) {
		//echo "<tr><td>" . $nilai['NIS'] . "</td><td>" . $nilai['NAMA_SISWA'] . "</td><td>".$nilai['NILAI']."</td><td>". ucwords(Terbilang($nilai['NILAI']))."</td></tr>";

	//}

//echo "</tbody><table>";

?>



