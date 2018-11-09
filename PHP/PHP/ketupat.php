<?php

for($i=0; $i<=7; $i++) /*variabel tinggi segitiga*/
{
	for($j=0; $j<=(7-$i); $j++)
		echo "&nbsp;";
	for($j=0; $j<=$i; $j++)
		echo "*";
	echo "<br>";
}

for($i=0; $i<=7; $i++) /*variabel tinggi segitiga*/
{
	for($j=0; $j<=(1+$i); $j++)
		echo "&nbsp;";
	for($j=$i; $j<7; $j++)
		echo "*";
	echo "<br>";
}


?>