<?php
class matematika{
	public $phi = 3.14;
	function tambah($a,$b){
		$c = $a + $b;
		return $c;
	}
	function kuadrat($x){
		return $x * $x;
	}
	function keliling_lingkaran($r){
		$kel = 2 * $this­->phi * $r;
		return $kel;
	}
	function luas_lingkaran($r){
		$luas = $this­->phi * $this­->kuadrat($r);
		return $luas;
	}
}

$mtk = new matematika();
$jari = 10;
$kel_lingkaran = $mtk->keliling_lingkaran($jari);
$luas_lingkaran = $mtk->luas_lingkaran($jari);
echo "Menghitung Keliling dan Luas Lingkaran <br>";
echo "Jari­Jari : ".$jari."<br>";
echo "Tambah = ".$mtk->tambah(5,9);
echo "Keliling = ".$mtk->$kel_lingkaran(10)."<br>";
echo "Luas = ".$luas_lingkaran;
?>