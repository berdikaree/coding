<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>16.1.03.03.0022</title>
</head>
<body>

	<form action="" name="form1" method="post">
		Pilih Tahun
		<select name="tahun" id="tahun">
			<?php for ($thn=1; $thn < 50 ; $thn++) { ?>
				<option value="<?php echo (2000+$thn);?>"><?php echo (2000+$thn); ?> </option>
				<?php }
				?>
		</select>
	</form>
	
</body>
</html>