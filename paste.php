<!DOCTYPE html>
<html>
<head>
<title>Restaurant Venus | Paste</title>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Oswald&display=swap');
</style>
<link rel="stylesheet" href="css/site_styles.css">
<link rel="stylesheet" href="css/dropdown.css">
<link rel="stylesheet" href="css/slideshow.css">
<link rel="stylesheet" href="C:\xampp\htdocs\DAW\laborator4\bootstrap-5.0.2-dist\css">
</head>
<body>
<?php
    require_once 'config/db_connection.php';

    $sql = "SELECT * FROM meniu.menu";
    $result = mysqli_query($conn, $sql);
?>
<div id="container_principal"> 

<div id="header">	
	<h1 >Restaurant "Venus", Oradea</h1>
 </div>
 
 <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="images/img1.jpg" style="width:100%;height: 400px">
    <div class="text">Paste Carbonara</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="images/paste1.jpg" style="width:100%;height:400px">
    <div class="text">Paste Bolognese</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="images/paste2.jpg" style="width:100%;height:400px">
    <div class="text">Paste Arrabbiata</div>
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
 </div>
 
<?php include('includes/menu.php');?>

<?php include('includes/col1.php');?>
 
 <div id="col2">
 <h1 class="text-center">Paste</h1>
 <?php
    require_once 'config/db_connection.php';
  
    $category = 'paste'; 
    $sql = "SELECT * FROM meniu.menu WHERE categorie = '$category'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<h2>". $row['denumire'] . " - " . $row['pret'] . " lei</h2>";
        echo "<p>" . $row['ingrediente'] . "</p>";
        }
    } else {
        echo "No pasta items found.";
    }
    mysqli_close($conn);
    ?>
  </div>
 
 <?php include('includes/col3.php');?>

 <?php include('includes/footer.php');?>
 
<script src="js/automaticslideshow.js"></script>
<script src="js/slideshow.js"></script>
</body>
</html>