<?php
	include "../config/koneksi.php";
include "../config/session_siswa.php";
	
	$NIS = $_GET[NIS];
	$no_absen = $_GET[no_absen];
	$siswa = mysql_query("SELECT * FROM siswa, kelas WHERE siswa.nisn = '$nisn' AND siswa.kelas_id = kelas.kelas_id");
	$r_siswa = mysql_fetch_array($siswa);
?>
<html>
<head>
<script language="JavaScript">
var gAutoPrint = true; // Tells whether to automatically call the print function

function printSpecial()
{
if (document.getElementById != null)
{
var html = '<HTML>\n<HEAD>\n';

if (document.getElementsByTagName != null)
{
var headTags = document.getElementsByTagName("head");
if (headTags.length > 0)
html += headTags[0].innerHTML;
}

html += '\n</HE>\n<BODY>\n';

var printReadyElem = document.getElementById("printReady");

if (printReadyElem != null)
{
html += printReadyElem.innerHTML;
}
else
{
alert("Could not find the printReady function");
return;
}

html += '\n</BO>\n</HT>';

var printWin = window.open("","printSpecial");
printWin.document.open();
printWin.document.write(html);
printWin.document.close();
if (gAutoPrint)
printWin.print();
}
else
{
alert("The print ready feature is only available if you are using an browser. Please update your browswer.");
}
}

</script>
</head>
<body>
<p align="center"><a href="javascript:void(printSpecial())"><img src="../view/images/printer.png" width="48" height="48" border="0"></a>
<div id="printReady"></p>
<title>Cetak Raport Siswa</title>
<center>
<h2 align="center" style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">LAPORAN HASIL UJIAN AKHIR SEMESTER GANJIL </h2>
</br>
<table width="882" height="82" align="center" border=0 style="font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
  <tbody>
    <tr>
      <td width="170"><strong>Nama Peserta Didik</strong></td>
      <td width="18">:</td>
      <td width="376"><?php echo $r_siswa[3]; ?></td>
    </tr>
    <tr>
      <td><strong>NISN</strong></td>
      <td>:</td>
      <td><?php echo $r_siswa[0]; ?></td>
      <td><strong>Semester</strong></td>
      <td>:</td>
      <td>Ganjil</td>
    </tr>
    <tr>
      <td><strong>Kelas</strong></td>
      <td>:</td>
      <td><?php echo $r_siswa[9]." ".$r_siswa[10]; ?></td>
      <td><strong>Tahun Ajaran</strong></td>
      <td>:</td>
      <td>2015/2016</td>
    </tr>
  </tbody>
</table>
</br>
<table width="882" height="116" border="1" align="center" style="border-collapse:collapse; font-family:Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif">
  <tbody>
    <tr>
    <td width="40" rowspan=3><div align="center"><strong>No</strong></div></td>
      <td width="360" rowspan=3><div align="center"><strong>Mata Pelajaran</strong></div></td>
      <td width="84" rowspan=3><div align="center"><strong>KKM *)</strong></div></td>
      <td colspan=2><div align="center"><strong>Nilai Hasil Belajar Siswa</strong></div></td>
    </tr>
    <tr>
      <td colspan=2><div align="center"><strong>Pengetahuan dan Pemahaman Konsep</strong></div></td>
	  
    </tr>
    <tr>
      <td width="171"><div align="center"><strong>Angka</strong></div></td>
      <td width="193"><div align="center"><strong>Keterangan</strong></div></td>
      
    </tr>
    <tr>
    <td height="23"><div align="center"><strong>I</strong></div></td>
    <td><strong>NORMATIF</strong></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    
    </tr>
    <?php
	$no = 1;
	$jml_nilai = 0;
	$nilai = mysql_query("SELECT * FROM nilai, mapel
						WHERE mapel.mapel_id = nilai.mapel_id
						AND nisn = '$nisn' AND mapel.keterangan = 'Normatif'");
	while($r_nilai = mysql_fetch_array($nilai))
	{
		echo '<tr>
    <td height="23"><div align="center">'.$no.'</div></td>
    <td>'.$r_nilai[7].'</td>
    <td><div align="center">75</div></td>
    <td><div align="center">'.$r_nilai[2].'</div></td>
    <td><div align="center">'.$r_nilai[4].'</div></td>
    </tr>';
	$no++;
	$jml_nilai+= $r_nilai[2];
	}

?>
    <tr>
    <td height="23"><div align="center"><strong>II</strong></div></td>
    <td><strong>ADAPTIF</strong></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
	
    </tr>
    <?php
	$nilai = mysql_query("SELECT * FROM nilai, mapel
						WHERE mapel.mapel_id = nilai.mapel_id
						AND nisn = '$nisn' AND mapel.keterangan = 'Adaptif'");
	while($r_nilai = mysql_fetch_array($nilai))
	{
		echo '<tr>
    <td height="23"><div align="center">'.$no.'</div></td>
    <td>'.$r_nilai[7].'</td>
    <td><div align="center">75</div></td>
    <td><div align="center">'.$r_nilai[2].'</div></td>
    <td><div align="center">'.$r_nilai[4].'</div></td>
    </tr>';
	$no++;
	$jml_nilai+= $r_nilai[2];
	}

?>
    <tr>
    <td height="23"><div align="center"><strong>III</strong></div></td>
    <td><strong>PRODUKTIF</strong></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>

    </tr>
    <?php
	
	$nilai = mysql_query("SELECT * FROM nilai, mapel
						WHERE mapel.mapel_id = nilai.mapel_id
						AND nisn = '$nisn' AND mapel.keterangan = 'Produktif'");
	while($r_nilai = mysql_fetch_array($nilai))
	{
		echo '<tr>
    <td height="23"><div align="center">'.$no.'</div></td>
    <td>'.$r_nilai[7].'</td>
    <td><div align="center">75</div></td>
    <td><div align="center">'.$r_nilai[2].'</div></td>
    <td><div align="center">'.$r_nilai[4].'</div></td>
    </tr>';
	$no++;
	$jml_nilai+= $r_nilai[2];
	}

?>
    <tr>
    <td height="23"><div align="center">
    <strong>IV</strong></div></td>
    <td><strong>MUATAN LOKAL</strong></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>
    <td><div align="center"></div></td>

    </tr>
    <tr>
    <td height="23" colspan=2><div align="center">
    <strong>JUMLAH</strong></div></td>
    <td bgcolor="#D0D0D0"><div align="center">-</div></td>
    <td><div align="center"><?php echo $jml_nilai; ?></div></td>
    <td bgcolor="#D0D0D0"><div align="center">-</div></td>

    </tr>
    <tr>
    <td height="23" colspan=2><div align="center"><strong>
    RATA-RATA</strong></div></td>
    <td bgcolor="#D0D0D0"><div align="center">-</div></td>
    <td><div align="center"><?php echo $jml_nilai/($no-1); ?>
    </div></td>
    <td bgcolor="#D0D0D0"><div align="center">-</div></td>

    </tr>
  </tbody>
</table>
<table align="center" width="882" style="font-family:Gotham,
 'Helvetica Neue', Helvetica, Arial, sans-serif">
    <tr>
    <td height="23" colspan=8><div align="left"><strong>*) 
    KKM : Kriteria Ketuntasan Minimal</strong></div></td>
    </tr>
    <tr>
    <td height="43" colspan=8></td>
  </tr>
  <?php
$walimurid=mysql_query("SELECT * FROM walimurid,siswa WHERE nisn = '".$nisn."' AND siswa.walimurid_id = walimurid.walimurid_id");
$r_walimurid=mysql_fetch_array($walimurid) or die(mysql_error());

$tanggal = mysql_query("SELECT CURDATE()");
$r_tanggal =mysql_fetch_array($tanggal); 
?>
  <tr>
    <td colspan=3 width="120" ></td>
    <td colspan=2></td>
    <td colspan=2>Jombang, <?php echo tgl_indo($r_tanggal[0]);
	 ?></td>
    </tr>
  <tr>
    <td colspan=3 width="300" ><div align="center">Orang Tua / Wali Peserta Didik
    </div></td>
    <td colspan=2 width="300"><div align="center">Kepala Sekolah,</div></td>
    <td colspan=2><div align="center">Wali Kelas,</div></td>
    </tr>
    <tr>
    <td height="82" colspan=8><div align="center"></div></td>
  </tr>
  <tr>
    <td colspan=3><div align="center"><strong><?php echo $r_walimurid[1]; ?>
    </strong></div></td>
    <td colspan=2><div align="center"><strong>Ir. H. NAWAWI,</strong></div></td>
    <td width="244" colspan=2><div align="center"><strong><?php echo 
	$_SESSION[nama];
	 ?></strong></div></td>
    </tr>
</table>
