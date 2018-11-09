<?php
  include('koneksi.php');

  $sql= "SELECT * FROM peminjam";
  $resultan=$koneksi->query($sql);
  ?>

<html>
    <head>
        <title>16.1.03.03.0011</title>
        </style>
    </head>
    
    <body>
    <h1>Perpustakaan</h1>
<table>
    <th width="750px" >   
        <table cellpadding="5" cellspacing="0" border="4">
		  <tr>
			<th>kode_anggota</th>
            <th>kode_buku</th>
			<th>kode_pinjam</th>
			<th>tanggal_pinjam</th>
			<th>tanggal_kembali</th> 
			<th>kode_petugas</th>
            
		  </tr>
           <?php            
            if($resultan->num_rows>0)
            {           
                $no = 0;
                while($data =$resultan->fetch_assoc())
                {
                    $no++;
                    echo '<tr>';
                        echo '<td>'.$no.'</td>';
                        echo '<td>'.$data['kode_anggota'].'</td>';
                        echo '<td>'.$data['kode_buku'].'</td>';
                        echo '<td>'.$data['tanggal_pinjam'].'</td>';
                        echo '<td>'.$data['tanggal_kembali'].'</td>';
                        echo '<td>'.$data['kode_petugas'].'</td>';

                      //  echo '<td><a href="penghuni_edit.php?id='.$data['id'].'">Edit</a> || <a href="penghuni_hapus.php?id='.$data['id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>'; 
                    echo '</tr>';
                    
                }
            }
            ?>
	   </table>
    </table>
        <a href="index.php"><button>Beranda</button> </a>
        <a href="penghuni_tambah.php"><button>Tambah Penghuni</button> </a><br>
        <a href="kamar.php"><button>Lihat Kamar</button> </a>
    </body>
</html>