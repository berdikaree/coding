<!DOCTYPE html>
<html>
<head>
    <title>INPUT KATEGORI BARANG</title>

    <!-- Skrip CSS -->
    <link rel="stylesheet" href="admin.css"/>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
</head> 
<body background="gambar/Blue Ocean Scene.jpg">

    <div class="container">
        <div class="main" align="center">
        	<h2>INPUT KATEGORI BARANG</h2><hr>
        	<a href="kategori.php" style="text-decoration:none"><input type="submit" value="VIEW DATA"></a>
            <form action="barang_proc.php" method="post">
                
                <label>KATEGORI :</label>
                <input id="kategori" name="kategori" placeholder="Kategori" type="text">

                <input type="submit" name="submit" value="SUBMIT">&nbsp;&nbsp;&nbsp;
				<input type="reset" name="submit" value="RESET">&nbsp;&nbsp;&nbsp;
            </form>
        </div>
    </div>

</body>
</html>