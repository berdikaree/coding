<!DOCTYPE html>
<html>
<head>
    <title>Latihan </title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">

    <!-- jQuery library -->
    <script src="jquery-3.2.1.min.js"></script>

    <style>
        input {
            text-align: center;
            text-align: center;
            font-weight: bold;
        }
        div div {
            width: 50%;

        }
    </style>
</head>
<body>

    <table width="100%" align="center">
        <tr>
            <td>
                <div align="center">
                    <h3>Menghitung Luas dan Volume Balok</h3>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Panjang</span>
                        <input placeholder="Panjang" required="" class="form-control" type="text" name='panjang' id="panjang" value="<?php if (isset($panjang)) echo $panjang ?>" >
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Lebar&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input placeholder="Lebar" required="" class="form-control" type="text" name='lebar' id="lebar" value="<?php if (isset($lebar)) echo $lebar ?>">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Tinggi&nbsp;&nbsp;&nbsp;</span>
                        <input placeholder="Tinggi" required="" class="form-control" type="text" name='tinggi' id="tinggi" value="<?php if (isset($tinggi)) echo $tinggi ?>">
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Volume&nbsp;</span>
                        <input placeholder="Volume" class="form-control" type="text" name="vol" id="vol" value="<?php if (isset($vol)) echo $vol ?>">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Luas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input placeholder="Luas" class="form-control" type="text" name="luas" id="luas" value="<?php if (isset($luas)) echo $luas ?>">
                    </div>
                </div>
            </td>
            <td>
                <div align="center">
                    <h3>Menghitung Luas dan Volume Bola</h3>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Jari - Jari</span>
                        <input placeholder="Jari - Jari" required="" class="form-control" type="text" name='jari' id="jari" value="<?php if (isset($jari)) echo $jari ?>" >
                    </div>
                    <br>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Volume&nbsp;&nbsp;</span>
                        <input placeholder="Volume" class="form-control" type="text" name="vol2" id="vol2" value="<?php if (isset($vol2)) echo $vol2 ?>">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon" style="background-color: blue; color: white; font-weight: bold;">Luas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        <input placeholder="Luas" class="form-control" type="text" name="luas2" id="luas2" value="<?php if (isset($luas2)) echo $luas2 ?>">
                    </div>
                </div>
            </td>
        </tr>
    </table>
    
    
    <!--</form>-->

</body>
</html>

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