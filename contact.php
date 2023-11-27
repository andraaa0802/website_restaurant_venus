<!DOCTYPE html>
<html>
<head>

<title>Restaurant Venus | Contact</title>
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
    <div class="numbertext">1 / 3</div>
    <img src="images/img3.jpg" style="width:100%;height: 400px">
    <div class="text">Burger de vită</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/img5.jpg" style="width:100%;height:400px">
    <div class="text">Lavacake</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/img1.jpg" style="width:100%;height:400px">
    <div class="text">Paste Carbonara</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
 </div>

 <?php include('includes/menu.php');?>

 <?php include('includes/col1.php');?>
 
 <div id="col2">

	<div class="top-container2">
 		<p class="text-center">Ne poți contacta atât la telefon sau prin email, cât și prin formularul de mai jos:</p>
 		<p class="text-center">Telefon: 0745897929 sau 0359422618</p>
 		<p class="text-center">Email: contact@venus.ro </p>
    </div>

	<div class="bottom-container2">
	<h2>Trimite-ne un mesaj aici: </h2>
  <form action="config/mesaj.php" method="POST">

    <div class="form-group">
      <label for="name">Nume:</label>
      <input type="text" class="form-control" id="name" placeholder="Introdu numele tău" name="name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Introdu adresa ta de email" name="email">
    </div>

    <div class="form-group">
      <label for="message">Mesaj:</label>
      <textarea class="form-control" rows="5" id="message" placeholder="Introdu mesajul tău" name="message"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
	</div>
 </div>
 
 <?php include('includes/col3.php');?>

 <?php include('includes/footer.php');?>
 
<script src="js/automaticslideshow.js"></script>
<script src="js/slideshow.js"></script>

</body>
</html>