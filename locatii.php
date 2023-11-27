<!DOCTYPE html>
<html>
<head>

<title>Restaurant Venus | Locații</title>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
</style>
<link rel="stylesheet" href="css/site_styles.css">
<link rel="stylesheet" href="css/dropdown.css">
<link rel="stylesheet" href="css/slideshow.css">
<link rel="stylesheet" href="C:\xampp\htdocs\DAW\laborator4\bootstrap-5.0.2-dist\css">

</head>
<body>

<div id="container_principal"> 

<div id="header">	
	<h1 >Restaurant "Venus", Oradea</h1>
 </div>
 
 <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="images/piata.jpg" style="width:100%;height: 400px">
    <div class="text">Piața Unirii</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="images/prima.jpg" style="width:100%;height:400px">
    <div class="text">Prima Shops</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="images/lotus.jpg" style="width:100%;height:400px">
    <div class="text">Lotus Center</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="images/magnolia.jpg" style="width:100%;height:400px">
    <div class="text">Magnolia Center</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
 </div>
 
<?php include('includes/menu.php');?>

 <?php include('includes/col1.php');?>
 
 <div id="col2">
  <div class="top-container">
    <p class="text-center">Te așteptăm cu drag într-una dintre locațiile noastre din Oradea:</p>
    <p class="text-center"><a href="https://www.google.com/maps/place/Pia%C8%9Ba+Unirii,+Oradea/@47.0544718,21.9270503,17.5z/data=!4m6!3m5!1s0x474647e878f538bf:0xbbab4feb89b43ffe!8m2!3d47.0545047!4d21.928304!16s%2Fg%2F11h0p_kmm"> Piața Unirii </a></p>
    <p class="text-center"><a href="https://www.google.com/maps/search/prima+shops/@47.0589029,21.9141057,17.25z">Prima Shops</a></p>
    <p class="text-center"><a href="https://www.google.com/maps/place/Lotus+Center/@47.0461886,21.9184561,13.75z/data=!4m10!1m2!2m1!1slotus+center!3m6!1s0x4746387153d13ff3:0xb2367ae1647cdf28!8m2!3d47.0359147!4d21.9488813!15sCgxsb3R1cyBjZW50ZXJaDiIMbG90dXMgY2VudGVykgEOY2xvdGhpbmdfc3RvcmXgAQA!16zL20vMDNtdzgz">Lotus Center</a></p>
    <p class="text-center"><a href="https://www.google.com/maps/place/Pia%C5%A3a+Magnoliei,+Oradea/@47.0780084,21.9157987,18.25z/data=!4m6!3m5!1s0x47464862dc08e9e9:0x32ccebe0e03dfc9f!8m2!3d47.078333!4d21.9168875!16s%2Fg%2F11bw3znxlx">Piața Magnoliei</a></p>
  </div>

    <div class="bottom-container">
      <div id="map"> </div>
       <script>
          window.onload = function() {
          initMap();
          };
        </script>
    </div>
 </div>

 <?php include('includes/col3.php');?>

 <?php include('includes/footer.php');?>

<script src="automaticslideshow.js"></script>
<script src="slideshow.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYG0kzMYc-KpQRIqOEyXzBChXKf7yR3Cc"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYG0kzMYc-KpQRIqOEyXzBChXKf7yR3Cc&callback=initMap"></script>
<script src="js/map.js"></script>
</body>
</html>