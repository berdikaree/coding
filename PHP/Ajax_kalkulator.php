 <!DOCTYPE html>
  <html>
  <head>
    <title>Latihan </title>
    <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
  </head>
  <body>
  <!--
  <form method="POST" action="latihan1.php">-->
  Menghitung Luas dan Volume Balok <br>
  Panjang :<input required="" type="text" name='panjang' id="panjang" value="<?php if (isset($panjang)) echo $panjang ?>0">
  Lebar   :<input required="" type="text" name='lebar' id="lebar" value="<?php if (isset($lebar)) echo $lebar ?>0">
  Tinggi  :<input required="" type="text" name='tinggi' id="tinggi" value="<?php if (isset($tinggi)) echo $tinggi ?>0">
  <input type="button" name="proces" id="proces" value="Hitung">
  <br>
  <input type="text" name="hasil" id="hasil" size="100px" width="100px">
  <br><br><br>
  <!--</form>-->
  </body>
  </html>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#tinggi').keyup(function(){
      hitung_volume();
      })
      function hitung_volume() {
        var panjang=$('#panjang').val();
        var lebar=$('#lebar').val();
        var tinggi=$('#tinggi').val();
        $.ajax({
          type:'POST',
          url:'process_kalkulator.php',
          data:'panjang='+panjang+'&lebar='+lebar+'&tinggi='+tinggi,
          success : function (res) {
           $('#hasil').val(res);
           
          }
        })
      }
    })
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#lebar').keyup(function(){
      hitung_volume();
      })
      function hitung_volume() {
        var panjang=$('#panjang').val();
        var lebar=$('#lebar').val();
        var tinggi=$('#tinggi').val();
        $.ajax({
          type:'POST',
          url:'process_kalkulator.php',
          data:'panjang='+panjang+'&lebar='+lebar+'&tinggi='+tinggi,
          success : function (res) {
           $('#hasil').val(res);
           
          }
        })
      }
    })
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#panjang').keyup(function(){
      hitung_volume();
      })
      function hitung_volume() {
        var panjang=$('#panjang').val();
        var lebar=$('#lebar').val();
        var tinggi=$('#tinggi').val();
        $.ajax({
          type:'POST',
          url:'process_kalkulator.php',
          data:'panjang='+panjang+'&lebar='+lebar+'&tinggi='+tinggi,
          success : function (res) {
           $('#hasil').val(res);
           
          }
        })
      }
    })
  </script>