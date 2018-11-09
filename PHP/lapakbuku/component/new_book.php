<style type="text/css">
    .wrapper{ margin-left: 6%}
    .wrapper-content{}
    .content{float: left; width: 150px; margin-right: 20px; background: #fff; border:1px solid #ccc; margin-top: 20px}
    .isi{background: #fff; padding: 10px}
    .isi h5{font-size: 12px;  text-align: center;}
    .isi h7{font-size: 12px;  text-align:center; border:1px solid #ccc; padding: 5px; margin-top: 5px; border-radius: 5px;}

    .isi h6{font-size: 12px;  text-align: center; padding: 10px; }
    input[type=submit]:hover{background: #fff; color: orange; outline: 1px solid #ccc;}
</style>
<div class="wrapper">
    <div class="wrapper-content">
<div class="tab" style="margin-left:0; margin-top: 50px; width: 94%">
  <li><a href="javascript:void(0)" class="tablinks">Buku Terbaru</a></li>
</div>
                
             <?php  
                $db->tampil_buku_index();
              ?>   
    </div>
</div>