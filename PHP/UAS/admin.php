<!DOCTYPE html>
<html>
<head>
    <title>LOGIN ADMIN</title>

    <!-- Skrip CSS -->
    <link rel="stylesheet" href="admin.css"/>
</head> 
<body background="gambar/Blue Ocean Scene.jpg">

    <div class="container">
        <div class="main">
            <form action="root.php" method="post">
                <h2>ADMIN LOGIN</h2><hr>  

                <label>Username :</label>
                <input id="username" name="username" placeholder="Username" type="text">

                <label>Password :</label>
                <input id="password" name="password" placeholder="**********" type="password">

                <input type="submit" name="submit" id="submit" value="Login">
            </form>
        </div>
    </div>

</body>
</html>