<?php
session_start(); 
if (!isset($_SESSION['username'])) { 
   $_SESSION['msg'] = "You have to log in first"; 
  // header('location: main.php'); 
} 

if (isset($_GET['logout'])) { 
   session_destroy(); 
   unset($_SESSION['username']); 
 //  header("location: main.php"); 
} 
?>
<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Charm:wght@700&family=Cookie&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap" rel="stylesheet">
<link href="E:\MiniProject\CSS\restaurants.css" rel="stylesheet">
<style type="text/css">
<?php include 'CSS\restaurants.css'; ?>

</style>
<head>
	<title>Restaurant</title>
</head>
<body bgcolor="black">
<?php
               if (!isset($_SESSION['username'])) {?>
<div class="container">

  <div class="navbar">
    <a href="Index.php" class="r1"> 
    <p class="t1">Home</p>
  </a>
    <a href="restaurant.php" class="r2"> 
    <p class="t2">Restaurants</p>
  </a>
    <p class="heading">Food Advisor</p>
  <a href="review.php" class="r3"> 
    <p class="t3">Review</p>
  </a>
  <a href="Login-In page.php" class="r4"> 
    <p class="t4">Login</p>
  </a>
  </div>
  <?php } ?>
  <?php if (isset($_SESSION['username'])) { ?>
  <div class="container">

  <div class="navbar">
    <a href="Index.php" class="r1"> 
    <p class="t1">Home</p>
  </a>
    <a href="restaurant.php" class="r2"> 
    <p class="t2">Restaurants</p>
  </a>
    <p class="heading">Food Advisor</p>
  <a href="review.php" class="r3"> 
    <p class="t3">review</p>
  </a>
  <a href="Index.php?logout=1" class="r4"> 
    <p class="t4">Logout</p>
  </a>
  </div>
  <?php } ?>
  <div class="r5">
  	<div class="r6">
  		<p class="text1">Locations</p>
      <a href="malad.php  " class="location1">Malad</a>
      <a href="kandivali.php" class="location2">Kandivali</a>
      <a href="borivali.php" class="location3">Borivali</a>
      <a href="dahisar.php" class="location4">Dahisar</a>
      <a href="goregaon.php" class="location5">Goregaon</a>
    </div>
  	<div class="r8">
  		<p class="text">List Of Restaurants</p>
  		
    </div>
  	<div class="r7">
  		<p class="text2">Locations</p>
      <a href="andheri.php" class="location6">Andheri</a>
      <a href="vp.php" class="location7">Vile Parle</a>
      <a href="bandra.php" class="location8">Bandra</a>
      <a href="dadar.php" class="location9">Dadar</a>
      <a href="mumbai.php" class="location10">Mumbai Central</a>
  	</div>
  </div>
</div>
<div class="line2"></div>
<img class="chillypng3" src="Images\chilly.png">
<img class="chillypng4" src="Images\chilly.png">
<br>
<div class="r9">
  <div class="r10">
    <img class="logopng" src="Images\logo.png">
    <p class="footerText">Pages</p>
    <p class="footerText1">Cuisine</p>
    <p class="footerText2">Popular Locations</p>
    <ul type="disc" class="footerListPages">
      <li><a  href="#" style="text-decoration: none;color: black;">Home</a></li>
      <li><a  href="#" style="text-decoration: none;color: black;">Restaurants</a></li>
      <li><a  href="JoinUs.html" style="text-decoration: none;color: black;">Join Us</a></li>
      <li><a  href="ContactUs.html" style="text-decoration: none;color: black;">Contact Us</a></li>
      <li><a  href="#" style="text-decoration: none;color: black;">About Us</a></li>
    </ul>
    <ul type="disc" class="footerListCuisine">
      <li><a  href="#" style="text-decoration: none;color: black;">Italian</a></li>
      <li><a  href="#" style="text-decoration: none;color: black;">Chinese</a></li>
      <li><a  href="#" style="text-decoration: none;color: black;">Indian</a></li>
      <li><a  href="#" style="text-decoration: none;color: black;">Cafe</a></li>
      <li><a  href="#" style="text-decoration: none;color: black;">Fast Food</a></li>
    </ul>
     <ul type="disc" class="footerListLocations">
      <li><a  href="#" style="text-decoration: none;color: black;">Juhu</a></li>
      <li><a  href="#" style="text-decoration: none;color: black;">Andheri</a></li>
      <li><a  href="#" style="text-decoration: none;color: black;">Malad</a></li>
      <li><a  href="#" style="text-decoration: none;color: black;">Borivali</a></li>
      <li><a  href="#" style="text-decoration: none;color: black;">Dahisar</a></li>
    </ul>
    <p class="footerAddress">Address:</p>
    <p class="footerAddressText">1903-C, Adani western Heights, Juhu (w)</p>
    <p class="footerContact">Contact Us:</p>
    <p class="footerContactText">7977729965 / 7977729966</p>
   </div>
</div>
</body>
</html>