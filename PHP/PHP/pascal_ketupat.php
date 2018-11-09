<?php 

for ($i = 0; $i <= 5; $i++) 
{ 
	for ($j = 0; $j <= ((2*5)-(2*$i)); $j++) 
	{ 
		echo "&nbsp;";
	}
	for ($k = 0; $k <= ((2*0)+(2*$i)); $k++) 
	{ 
		echo "*";
	}
	echo "<br>";
}

for ($i = 0; $i <= 4; $i++) 
{ 
	for ($j = 0; $j <= ((2*1)+(2*$i)); $j++) 
	{ 
		echo "&nbsp;";
	}
	for ($k = 0; $k <= ((2*4)-(2*$i)); $k++) 
	{ 
		echo "*";
	}
	echo "<br>";
}

?>