<?php 

class prima{
	function prima($angka){
		$a = ' ';
		 for($a=1;$a<=$angka;$a++){ // perulangan 1 sampai 100
            $k = 0;
            for($b=1;$j<=$a;$b++){ // perulangan bilangan pembagi
                        if($a % $b == 0){ // modulus
                                    $k++;
                        }
            }
            if($k == 2){ // salah satu syarat 2 bukan merupakan bilangan prima
                    $a.='<br>';
            }
		}
		return $a;
	}
}

?>