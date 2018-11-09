<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>16.1.03.03.0022</title>
    <style type="text/css">
        .h {color: white;}
        h1:hover {color: blue;}
        h2:hover {color: blue;}
        button {
            height: 50px;
            font-size: 15px;
            color: white;
            font-weight: bold;
            background-color: #1939FD;
        }
        table {
            font-weight: bold;
        }
        thead {
            background-color: #75FBE7;
        }
        a {
            color: black;
            text-decoration: none;
        }
        th, td {
            padding: 8px;
            text-align: center;
            border-bottom: 1px solid blue;
            border-right: 1px solid blue;
        }
        tbody tr:hover{background-color:#75FBE7; color: #000000}
        tbody tr td a:hover{color: #FF0000}
        div h3 a:hover{background-color: #FF0000; color: #FF0000;}
        .logout {
            height: 50px;
            font-size: 15px;
            color: white;
            font-weight: bold;
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body background="gambar/Manchester-United-Wallpaper-21.jpg">
    
    <div align="center" class="h">
        <h1>SONY DWI KURNIAWAN</h1>
        <h2>16.1.03.03.0022</h2>
    
        <a href="menu_admin.php"><button class="btn btn-info logout"><</button></a>
        <a href="tambah.php"><button class="btn btn-info logout">Tambah Produk</button></a>
    </div>
    <br>
    <table width="100%" align="center" style="border-style: solid; border-radius: 10px; border-color: blue;">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Gambar</th>
                <th>Nama Barang</th>
                <th>Deskripsi Barang</th>
                <th>Kategori ID</th>
                <th>Kategori Nama</th>
                <th>Harga Barang</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody align="center">
            <?php
            // Load file koneksi.php
            include "koneksi.php";

            $query = "SELECT B.*, K.id as k_nama, K.kategori as k_id
            FROM barang B
            JOIN kategori K ON B.kategori=K.kategori
            ORDER BY B.kode";

            // $query = "SELECT * FROM barang"; // Query untuk menampilkan semua data siswa
            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
            
            while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                echo "<tr>";
                echo "<td>".$data['kode']."</td>";
                echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
                echo "<td>".$data['nama']."</td>";
                echo "<td>".$data['deskripsi']."</td>";
                echo "<td>".$data['k_nama']."</td>";
                echo "<td>".$data['k_id']."</td>";
                echo "<td>Rp. ".number_format($data['harga'],2,",",".")."</td>";
                echo "<td><a href='form_ubah.php?id=".$data['id']."'><button class='btn btn-primary logout btn-sm'>Ubah</button></a>  <a href='proses_hapus.php?id=".$data['id']."'><button class='btn btn-info logout btn-sm'>Hapus</button></a></td>";
                echo "</tr>";
            }
            ?>
        </tbody>


    </table>
    

</body>
</html>