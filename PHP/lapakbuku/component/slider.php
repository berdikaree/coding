<div class="slide-container">

<div class="slideSaya fade">
  <img src="asset/image/a.jpg" style="width:100%; padding: 0; height:400px; margin-top: 50px;">

</div>

<div class="slideSaya fade">
  <img src="asset/image/d.jpg" style="width:100%; padding: 0; height:400px; margin-top: 50px;">

</div>

<div class="slideSaya fade">
  <img src="asset/image/1160.jpg" style="width:100%; padding: 0; height:400px; margin-top: 50px; ">
</div>

<a class="prev" style="top: 60%;" onclick="plusSlides(-1)"><</a>
<a class="next" style="top: 60%;" onclick="plusSlides(1)">></a>

</div>
<div class="slider-content" style="float: right;width: 35%; margin-right: 6%; ">
<a href="promotion.php?aksi=banner_promotion">
   <div class="slider-contents">
    <img src="admin/gambar/programmer.png" style="width:100%; padding: 0; height:186px; margin-top: 50px; ">
  </div>
</a>
 
   <div class="slider-contents">
    <img src="asset/image/1148.jpg" style="width:100%; padding: 0; height:186px; margin-top: 20px;  margin-bottom: 50px ">
  </div>
</div>

<script>
var homeSlide = 1;
showSlides(homeSlide);

function plusSlides(n) {
  showSlides(homeSlide += n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slideSaya");
  if (n > slides.length) {homeSlide = 1}
  if (n < 1) {homeSlide = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  
  slides[homeSlide-1].style.display = "block";
}
</script>