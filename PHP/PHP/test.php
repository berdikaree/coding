<?php 

for($i=1;$i<=7;$i++)
{
	$spasi=10-$i;
	for($j=1; $j<=$spasi; $j++)
		echo "&emsp;";
	for($k=1;$k<=$i+($i-1);$k++)
		echo "*";
	echo "<br>";
}

for($i=1;$i<=6;$i++)
{
	$spasi=3+$i;
	for($j=1; $j<=$spasi; $j++)
		echo "&emsp;";
	for($k=$i+($i-1);$k<=11;$k++)
		echo "*";
	echo "<br>";
}

?>