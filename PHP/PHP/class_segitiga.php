<?php

class segitiga{
	function setengah($tinggi){
		$res = ' ';
		for ($i = 0; $i < $tinggi ; $i++) { 
			for ($j = 0; $j < ((2*$tinggi) - (2*$i)) ; $j++) { 
				$res.= "&nbsp;";
			}
			for ($k = 0; $k <= ((2*0) + (2*$i)); $k++) { 
				$res.= "*";
			}
			$res.= "<br>";
		}
		return $res;
	}

	function ketupat($tinggi){
		$res = '';
		for ($i = 0; $i <= $tinggi; $i++) { 
			for ($j = 0; $j < ((2*1)+(2*$i)); $j++) { 
				$res.= "&nbsp;";
			}
			for ($k = 0; $k <= ((2*$tinggi)-(2*$i)); $k++) { 
				$res.= "*";
			}
			$res.= "<br>";
		}
		return $res;
	}
	function pascal($tinggi){
		$res = '';
		for ($i = 0; $i <= $tinggi; $i++) {
		    for ($k = 0; $k < ((2*$tinggi)-(2*$i)); $k++) {
		        $res.= "&nbsp;";
		    }
		    for ($j = 0; $j <= $i; $j++) {
		        if ($j==0||$i==$j){
		            $a=1;
		        }
		        else {
		            $a=$a*($i+1-$j)/$j;
		        }
		        $res.= "&nbsp;";
		        $res.= "$a";
		        $res.= "&nbsp;";
		    }
		    $res.= "&nbsp;";
		    $res.= "<br>";
		}
		return $res;
	}
}

?>