<?php
	
	class matematika{
		function luas($t,$l,$p){
			$luas = 2*(($t*$l)+($t*$p)+($l*$p));
			return $luas;
		}
		function volume($t,$l,$p){
			$v = $t * $l * $p;
			return $v;
		}
		function luas_bola($r){
			$luas_bola = 4 * $r * $r * 3.14;
			return $luas_bola;
		}
		function volume_bola($r){
			$volume_bola = $r * $r * $r * 3.14 * (4 / 3);
			return $volume_bola; 
		}
		function konversi($d){
			$e = '';
			if ($d > 0 && $d <= 12.5) {
				$e = "E";
			}
			elseif ($d > 12.5 && $d <= 25) {
				$e = "E+";
			}
			elseif ($d > 25 && $d <= 37.5) {
				$e = "D";
			}
			elseif ($d > 37.5 && $d <= 50) {
				$e = "D+";
			}
			elseif ($d > 50 && $d <= 62.5) {
				$e = "C";
			}
			elseif ($d > 62.5 && $d <= 75) {
				$e = "C+";
			}
			elseif ($d > 75 && $d <= 87.5) {
				$e = "B";
			}
			elseif ($d > 87.5 && $d <= 90) {
				$e = "B+";
			}
			elseif ($d > 90 && $d <= 100) {
				$e = "A";
			}
			else {
				$e = "Error";
			}
			return $e;
		}
	}

?>