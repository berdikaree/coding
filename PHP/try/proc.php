<?php 

    if (isset($_POST['angka'])) {
        $angka = $_POST['angka'];
        
        $hasil = "";
        //echo $bilangan;
        for($i=1; $i<=$angka; $i++){
            $p = 0; //total pembagi
         
            //mencari pembagi
            for($j=1; $j<=$i; $j++){
                if($i % $j == 0){
                    $p += 1; //total pembagi bertambah
                }
            }
            
            //jika pembaginya kurang dari atau sama dengan 2.
            if($p <= 2){
                $hasil .= $i." ";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bilangan Prima</title>
</head>
<body>
    
    <div align="center">
        <h2>Menampilkan Bilangan Prima</h2>
        <form action="proc.php" method="POST">
            <h4>Input</h4>
            <input type="text" name="angka" placeholder="Angka" required="Harap Diisi" value="<?php if (isset($angka)) echo $angka?>"">
            <input type="submit" name="proses" value="Hitung">
            <br>
            <h3>HASIL</h3>
        <?php
            if (isset($hasil)) echo $hasil;
        ?>
        
        </form>
    </DIV>

</body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('#id').keyup(function(){
            //alert("Belajar jQuery");
            var kode = $('#id').val();
            $.ajax({
                type : "POST",
                url  : "class_prima.php",
                data : 'kode='+kode,
                success : function(res){
                    var hasil = res.split('|');
                    if (hasil[0]==0) {
                        $('#ket').html('Kode Belum Digunakan');
                    }
                    else {
                        $('#ket').html('Kode Sudah Digunakan || '+hasil[2]);
                    }
                }
            })
        })
    })
</script>
<script type="text/javascript">
    $(document).ready(function(){
        $('input').keyup(function(){
            hitung_volume();
        })
        function hitung_volume() {
            var panjang=$('#panjang').val();
            var lebar=$('#lebar').val();
            var tinggi=$('#tinggi').val();
            var jari=$('#jari').val();

            var vol=panjang*lebar*tinggi;
            $('#vol').val(vol);
            var luas=2*((panjang*lebar)+(panjang*tinggi)+(lebar*tinggi));
            $('#luas').val(luas);
            var vol1=jari*jari*jari*3.14*(4/3);
            vol2 = vol1.toFixed(2);
            $('#vol2').val(vol2);
            var luas1=jari*jari*3.14*4;
            luas2 = luas1.toFixed(2);
            $('#luas2').val(luas2);
        }
    })
</script>