<?php
session_start();
include "../config/koneksi.php";
include "../fungsi.php";
$a= $_GET['NIS'];
$sql = "SELECT * FROM SISWA WHERE NIS= '$a'";
$data = mysql_query($sql, $konek);
$record = mysql_fetch_array($data);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="assets/css/raport.css" type="text/style" rel="stylesheet">
<link href="../assets/css/font.css" rel="stylesheet">
</head>

<body>
<?php
$sql1= "select * from kelas inner join siswa on siswa.ID_KELAS = kelas.ID_KELAS inner join guru on guru.NIP=kelas.NIP where NIS='".$_GET['NIS']."'";
$hasil1= mysql_query($sql1,$konek);
$record1= mysql_fetch_array($hasil1);
//ini untuk nilai PAI
$sql2="select * from nilai inner join mapel on nilai.ID_MAPEL= mapel.ID_MAPEL inner join siswa on siswa.NIS=nilai.NIS where nilai.NIS='".$_GET['NIS']."' and Nilai.ID_MAPEL= '101'";
$hasil2= mysql_query($sql2, $konek);
$pai= mysql_fetch_array($hasil2);
//ini untuk nilai PKN
$sql3="select * from nilai inner join mapel on nilai.ID_MAPEL= mapel.ID_MAPEL inner join siswa on siswa.NIS=nilai.NIS where nilai.NIS='".$_GET['NIS']."' and Nilai.ID_MAPEL= '102'";
$hasil3= mysql_query($sql3, $konek);
$pkn= mysql_fetch_array($hasil3);
//ini untuk nilai B.ind
$sql4="select * from nilai inner join mapel on nilai.ID_MAPEL= mapel.ID_MAPEL inner join siswa on siswa.NIS=nilai.NIS where nilai.NIS='".$_GET['NIS']."' and Nilai.ID_MAPEL= '103'";
$hasil4= mysql_query($sql4, $konek);
$bin= mysql_fetch_array($hasil4);
//ini untuk nilai penjas
$sql5="select * from nilai inner join mapel on nilai.ID_MAPEL= mapel.ID_MAPEL inner join siswa on siswa.NIS=nilai.NIS where nilai.NIS='".$_GET['NIS']."' and Nilai.ID_MAPEL= '104'";
$hasil5= mysql_query($sql5, $konek);
$penjas= mysql_fetch_array($hasil5);
//ini untuk nilai matem
$sql6="select * from nilai inner join mapel on nilai.ID_MAPEL= mapel.ID_MAPEL inner join siswa on siswa.NIS=nilai.NIS where nilai.NIS='".$_GET['NIS']."' and Nilai.ID_MAPEL= '105'";
$hasil6= mysql_query($sql4, $konek);
$matem= mysql_fetch_array($hasil6);
//ini untuk nilai B.inggris
$sql7="select * from nilai inner join mapel on nilai.ID_MAPEL= mapel.ID_MAPEL inner join siswa on siswa.NIS=nilai.NIS where nilai.NIS='".$_GET['NIS']."' and Nilai.ID_MAPEL= '106'";
$hasil7= mysql_query($sql7, $konek);
$bing= mysql_fetch_array($hasil7);
//ini untuk nilai fisika
$sql8="select * from nilai inner join mapel on nilai.ID_MAPEL= mapel.ID_MAPEL inner join siswa on siswa.NIS=nilai.NIS where nilai.NIS='".$_GET['NIS']."' and Nilai.ID_MAPEL= '107'";
$hasil8= mysql_query($sql8, $konek);
$fisika= mysql_fetch_array($hasil8);
//ini untuk nilai kimia
$sql9="select * from nilai inner join mapel on nilai.ID_MAPEL= mapel.ID_MAPEL inner join siswa on siswa.NIS=nilai.NIS where nilai.NIS='".$_GET['NIS']."' and Nilai.ID_MAPEL= '108'";
$hasil9= mysql_query($sql9, $konek);
$kimia= mysql_fetch_array($hasil9);
//ini untuk nilai kwu
$sql10="select * from nilai inner join mapel on nilai.ID_MAPEL= mapel.ID_MAPEL inner join siswa on siswa.NIS=nilai.NIS where nilai.NIS='".$_GET['NIS']."' and Nilai.ID_MAPEL= '109'";
$hasil10= mysql_query($sql10, $konek);
$kwu= mysql_fetch_array($hasil10);
//ini untuk nilai pbo
$sql11="select * from nilai inner join mapel on nilai.ID_MAPEL= mapel.ID_MAPEL inner join siswa on siswa.NIS=nilai.NIS where nilai.NIS='".$_GET['NIS']."' and Nilai.ID_MAPEL= '110'";
$hasil11= mysql_query($sql11, $konek);
$pbo= mysql_fetch_array($hasil11);
//ini untuk nilai pbw
$sql12="select * from nilai inner join mapel on nilai.ID_MAPEL= mapel.ID_MAPEL inner join siswa on siswa.NIS=nilai.NIS where nilai.NIS='".$_GET['NIS']."' and Nilai.ID_MAPEL= '111'";
$hasil12= mysql_query($sql12, $konek);
$pbw= mysql_fetch_array($hasil12);
//ini untuk nilai bdl
$sql13="select * from nilai inner join mapel on nilai.ID_MAPEL= mapel.ID_MAPEL inner join siswa on siswa.NIS=nilai.NIS where nilai.NIS='".$_GET['NIS']."' and Nilai.ID_MAPEL= '112'";
$hasil13= mysql_query($sql13, $konek);
$bdl= mysql_fetch_array($hasil13);
//ini untuk nilai ibdw
$sql14="select * from nilai inner join mapel on nilai.ID_MAPEL= mapel.ID_MAPEL inner join siswa on siswa.NIS=nilai.NIS where nilai.NIS='".$_GET['NIS']."' and Nilai.ID_MAPEL= '113'";
$hasil14= mysql_query($sql14, $konek);
$ibdw= mysql_fetch_array($hasil14);

//ini untuk jumlah
$jumlah="select sum(nilai) as JUMLAH from nilai where NIS='".$_GET['NIS']."'";
$hasill= mysql_query($jumlah, $konek);
$jumlahh= mysql_fetch_array($hasill);

//ini untuk query rata"
$rata="select avg(NILAI) as RATA from nilai where NIS='".$_GET['NIS']."'";
$hasilrata= mysql_query($rata, $konek);
$rataa= mysql_fetch_array($hasilrata);
//ini untuk query lulus atau tidak
?>

<div class="raport">
<form id="form1" name="form1" method="post" action="" >
<center>
  <table width="949" border="0">
  <tr>
  <button class="material-icons" onclick="window.print();">print</button>
  </tr>
    <tr>
      <td width="939"><div align="center">LAPORAN HASIL BELAJAR PESERTA DIDIK</div></td>
    </tr>
    <tr>
      <td><div align="center">SMK TELEKOMUNIKASI DARUL 'ULUM JOMBANG</div></td>
    </tr>
    <tr>
      <td><div align="center">(Rekayasa Perangkat Lunak)</div></td>
    </tr>
  </table>
  <table width="951" height="119" border="0">
    <tr>
      <td width="160">Nama Peserta Didik</td>
      <td width="6">:</td>
      <td width="256"><?php echo $record['NAMA_SISWA']; ?></td>
    </tr>
    <tr>
      <td>NISN</td>
      <td>:</td>
      <td><?php echo $_GET['NIS']; ?></td>
      <td>&nbsp;</td>
      <td>Semester</td>
      <td>:</td>
      <td>I</td>
    </tr>
    <tr>
      <td>Kelas</td>
      <td>:</td>
      <td><?php echo $record1['NAMA_KELAS']; ?></td>
      <td>&nbsp;</td>
      <td>Tahun Ajaran</td>
      <td>:</td>
      <td>2016/2017</td>
    </tr>
  </table>
  <table width="950" height="210" border="1" bordercolorlight="#000000">

    <tr>
      <td width="30" rowspan="3"><div align="center">No.</div></td>
      <td width="260" rowspan="3"><div align="center">Mata Pelajaran</div></td>
      <td width="68" rowspan="3"><div align="center">KKM</div></td>
      <td colspan="3"><div align="center">Nilai Hasil Belajar Siswa</div></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Pengetahuan dan Pemahaman Konsep</div></td>
      <td width="213" rowspan="2"><div align="center">Keterangan</div>      </td>
    </tr>
    <tr>
      <td width="60"><div align="center">Angka</div></td>
      <td width="213"><div align="center">Huruf</div></td>
    </tr>
    <tr>
      <td><div align="center"><b>I</b></div></td>
      <td><b>NORMATIF</b></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">1</div></td>
      <td>Pendidikan Agama</td>
      <td><center><?php echo $pai['KKM']; ?></center></td>
      <td><center><?php echo $pai['NILAI']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($pai['NILAI'])); ?></center></td>
      <td><center><?php echo  ketNilai($pai['NILAI'],$pai['KKM']) ; ?></center></td>
    </tr>
    <tr>
      <td><div align="center">2</div></td>
      <td>Pendidikan Kewarganegaraan</td>
      <td><center><?php echo $pkn['KKM']; ?></center></td>
      <td><center><?php echo $pkn['NILAI']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($pkn['NILAI'])); ?></center></td>
      <td><center><?php echo  ketNilai($pkn['NILAI'],$pkn['KKM']) ; ?></center></td>
    </tr>
    <tr>
      <td><div align="center">3</div></td>
      <td>Bahasa Indonesia</td>
      <td><center><?php echo $bin['KKM']; ?></center></td>
      <td><center><?php echo $bin['NILAI']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($bin['NILAI'])); ?></center></td>
      <td><center><?php echo  ketNilai($bin['NILAI'],$bin['KKM']) ; ?></center></td>
    </tr>
    <tr>
      <td><div align="center">4</div></td>
      <td>Pendidikan Jasmani,Olahraga dan Kesehatan</td>
      <td><center><?php echo $penjas['KKM']; ?></center></td>
      <td><center><?php echo $penjas['NILAI']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($penjas['NILAI'])); ?></center></td>
      <td><center><?php echo  ketNilai($penjas['NILAI'],$penjas['KKM']) ; ?></center></td>
    </tr>
    <tr>
      <td><div align="center"><b>II</b></div></td>
      <td><b>ADAPTIF</b></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">1</div></td>
      <td>Matematika</td>
      <td><center><?php echo $matem['KKM']; ?></center></td>
      <td><center><?php echo $matem['NILAI']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($matem['NILAI'])); ?></center></td>
      <td><center><?php echo  ketNilai($matem['NILAI'],$matem['KKM']) ; ?></center></td>
    </tr>
    <tr>
      <td><div align="center">2</div></td>
      <td>Bahasa Inggris</td>
      <td><center><?php echo $bing['KKM']; ?></center></td>
      <td><center><?php echo $bing['NILAI']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($bing['NILAI'])); ?></center></td>
      <td colspan="2"><center><?php echo  ketNilai($bing['NILAI'],$bing['KKM']) ; ?></center></td>
    </tr>
    <tr>
      <td><div align="center">3</div></td>
      <td>Ilmu Pengetahuan Alam</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">3.1</div></td>
      <td>Fisika</td>
      <td><center><?php echo $fisika['KKM']; ?></center></td>
      <td><center><?php echo $fisika['NILAI']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($fisika['NILAI'])); ?></center></td>
      <td><center><?php echo  ketNilai($fisika['NILAI'],$fisika['KKM']) ; ?></center></td>
    </tr>
    <tr>
      <td><div align="center">3.2</div></td>
      <td>Kimia</td>
      <td><center><?php echo $kimia['KKM']; ?></center></td>
      <td><center><?php echo $kimia['NILAI']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($kimia['NILAI'])); ?></center></td>
      <td><center><?php echo  ketNilai($kimia['NILAI'],$kimia['KKM']) ; ?></center></td>
    </tr>
    <tr>
      <td><div align="center">4</div></td>
      <td>Kewirausahaan</td>
      <td><center><?php echo $kwu['KKM']; ?></center></td>
      <td><center><?php echo $kwu['NILAI']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($kwu['NILAI'])); ?></center></td>
      <td><center><?php echo  ketNilai($kwu['NILAI'],$kwu['KKM']) ; ?></center></td>
    </tr>
    <tr>
      <td><div align="center"><b>III</b></div></td>
      <td><b>PRODUKTIF</b></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td><div align="center">1</div></td>
      <td>Merancang aplikasi teks dan dekstop Berbasis Objek</td>
      <td><center><?php echo $pbo['KKM']; ?></center></td>
      <td><center><?php echo $pbo['NILAI']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($pbo['NILAI'])); ?></</center></td>
      <td><center><?php echo  ketNilai($pbo['NILAI'],$pbo['KKM']) ; ?></center></td>
    </tr>
    <tr>
      <td><div align="center">2</div></td>
      <td>Membuat Aplikasi Web Berbasis JSP</td>
      <td><center><?php echo $pbw['KKM']; ?></center></td>
      <td><center><?php echo $pbw['NILAI']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($pbw['NILAI'])); ?></center></td>
      <td><center><?php echo  ketNilai($pbw['NILAI'],$pai['KKM']) ; ?></center></td>
    </tr>
    <tr>
      <td><div align="center">3</div></td>
      <td>Membuat Aplikasi Basis Data Menggunakan SQL</td>
      <td><center><?php echo $bdl['KKM']; ?></center></td>
      <td><center><?php echo $bdl['NILAI']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($bdl['NILAI'])); ?></center></td>
      <td><center><?php echo  ketNilai($bdl['NILAI'],$bdl['KKM']) ; ?></center></td>
    </tr>
    <tr>
      <td><div align="center">4</div></td>
      <td>Merancang Program aplikasi web Berbasis</td>
      <td><center><?php echo $ibdw['KKM']; ?></center></td>
      <td><center><?php echo $ibdw['NILAI']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($ibdw['NILAI'])); ?></center></td>
      <td><center><?php echo  ketNilai($ibdw['NILAI'],$ibdw['KKM']) ; ?><center></td>
    </tr>
    <tr>
      <td><div align="center"><b>IV</b></div></td>
      <td><b>MUATAN LOKAL</b></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">JUMLAH</div></td>
      <td>&nbsp;</td>
      <td><center><?php echo $jumlahh['JUMLAH']; ?></center></td>
      <td><center><?php echo ucwords(Terbilang($jumlahh['JUMLAH'])); ?></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">Rata-Rata</div></td>
      <td>&nbsp;</td>
      <td><center><?php echo $rataa['RATA']; ?></center></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <table width="948" border="0">
    <tr>
      <td colspan="5">*)KKM: Kriteria Ketuntasan Minimal</td>
    </tr>
    <tr>
      <td colspan="5"><div align="right">Jombang,09 Desember 2016</div></td>
    </tr>
    <tr>
      <td colspan="3"><div align="center">Orang Tua/ Wali Peserta Didik</div></td>
      <td width="296"><div align="center">Kepala Sekolah</div></td>
      <td width="325"><div align="center">Wali Kelas</div></td>
    </tr>
    <tr>
      <td height="110" colspan="3">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
      <td colspan="3"><div align="center"><?php echo $record1['NAMA_WALI']; ?></div></td>
      <td width="296"><div align="center">Ir.NURKOYIN,M.Kom</div></td>
      <td width="325"><div align="center"><?php echo $record1['NAMA_GURU']; ?></div></td>
    </tr>
  </table>
  </center>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</div>
</body>
</html>
