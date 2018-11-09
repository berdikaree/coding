<?php 

class prima{
	function bilangan($angka){
		$i = ' ';
		 for($i=1;$i<=$angka;$i++){
            $a = 0;
            for($j=1;$j<=$i;$j++){
                        if($i % $j == 0){
                                    $a++;
                        }
            }
            if($a == 2){
                    echo $i.' ';
            }
        }
		return $i;
	}
}

?>