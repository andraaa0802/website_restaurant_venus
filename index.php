<!DOCTYPE html>
<html>
<head>

<title>Restaurant Venus | Acasă</title>
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
    <div class="numbertext">1 / 6</div>
    <img src="images/img1.jpg" style="width:100%;height: 400px">
    <div class="text">Paste carbonara</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 6</div>
    <img src="images/img2.jpg" style="width:100%;height:400px">
    <div class="text">Pizza Quattro Stagioni</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 6</div>
    <img src="images/img3.jpg" style="width:100%;height:400px">
    <div class="text">Burger de vită</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 6</div>
    <img src="images/img4.jpg" style="width:100%;height:400px">
    <div class="text">Lasagna</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 6</div>
    <img src="images/img5.jpg" style="width:100%;height:400px">
    <div class="text">Lava cake</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">6 / 6</div>
    <img src="images/img6.jpg" style="width:100%;height:400px">
    <div class="text">Cheesecake cu fructe de pădure</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
 </div> 
 
 <?php include('includes/menu.php');?>
 
 <?php include('includes/col1.php'); ?>
 
 <div id="col2">
  <h1>Bun venit!</h1><p>Dacă ți-e poftă de ceva bun, te așteptăm cu drag la Venus! Vin-o să ne cunoști într-una din locațiile noastre, comandă mâncarea direct la tine acasă cu ajutorul partenerilor noștri (Glovo, Ubereats, Tazz, Takeaway) sau comandă telefonic și ridică-ți comanda când dorești! Nu uita să verifici promoțiile noastre active! <p>
  <img src="images\program.JPG" alt="Program restaurant" style="display: block; margin: auto;" width=300, height=300>
</div>
</div>
 
<?php include ('includes/col3.php');?>

<?php include ('includes/footer.php');?>
 
</div>
<script src="js/automaticslideshow.js"></script>
<script src="js/slideshow.js"></script>
</body>
</html>