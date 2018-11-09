<?php

for($i=0; $i<7; $i++) /*variabel tinggi segitiga*/
{
	$spasi=7-$i;
	for($j=0; $j<=$spasi; $j++)
		echo "&nbsp;";
	for($j=0; $j<=$i; $j++)
		echo "*";
	echo "<br>";
}


?>