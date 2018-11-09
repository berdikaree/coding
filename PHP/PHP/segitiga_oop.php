<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php 

	include 'class_segitiga.php';

	$triangle = new segitiga;
	$tinggi = 5;
	$banyak = 4;

?>
	
	<button onclick="document.getElementById('ketupat').innerHTML='<?php echo $triangle->setengah($tinggi); ?>'">Segitiga</button>
	<button onclick="document.getElementById('ketupat').innerHTML='<?php echo $triangle->setengah($tinggi); echo $triangle->ketupat($banyak); ?>'">Ketupat</button>
	<button onclick="document.getElementById('ketupat').innerHTML='<?php echo $triangle->pascal($banyak); ?>'">Pascal</button>
	<div id="ketupat"></div>
	
</body>
</html>