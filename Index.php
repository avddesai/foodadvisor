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
<link href="CSS/style.css" rel="stylesheet">
<head>
	<title>Food Advisor</title>
</head>
<body bgcolor="black">
   <?php
               if (!isset($_SESSION['username'])) {?>
<div class="container">
<div class="r5">
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
<div class="r5">
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
  <a href="Index.php?logout=1" class="r4"> 
    <p class="t4">Logout</p>
  </a>
  </div>
  <?php } ?>
  <div class="slide">
  <img class="img1" src="Images\02.jpg" >
  <img class="img1" src="Images\03.jpg" >
  <img class="img1" src="Images\04.jpg" >
  <img class="img1" src="Images\05.jpg" >
  <img class="img1" src="Images\06.jpg" >
  <img class="img1" src="Images\07.jpg" >
  <img class="img1" src="Images\08.jpg" >
  </div>
   <?php
  include('config.php');
           if(isset($_POST['sd'])){$search = $_POST['search'];
      $query = "SELECT * FROM url WHERE page = '$search' ";
      $result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_array($result)) {
        header ('location :' .$row["page"] . '.php'); 
      }}
  ?>
  <form name="myform" id="myform" action="search.php" method="POST">
  <input type="text" name="search" id="search" placeholder="Search Your Favourite Restaurant" class="r6"  style="outline-width: 0px;"><button class="iconbox" id="sd"><img src="Images\SearchIcon.png" class="icon1"></button></input></form>

  <p class="t5">Research,Review,Revisit</p>
 </div>
</div>
<div class="line1"></div>
<img class="chillypng" src="Images\chilly.png">
<img class="chillypng2" src="Images\chilly.png">

<div class="r7">
 <div class="r8">
 	<p class="popular">Popular In Town</p>
 	<table>
 		<tr>
 			<td><div class="restaurantcontainer">
 				<img class="containerlogo" src="Images\starbucks.png">
 				<a href="starbucks.php" class="containerText-Name">Starbucks Coffee</a><br>
 				<p class="containerText-Cusine">Cafe</p>
 				<div class="containerIcon-BoxStar"><img src="Images\star.png" class="containerIcon-Star"></div>
 				<?php 

$sql = "Select Round(AVG(rating),2) from review WHERE restaurant='Starbucks' ";
$result = $connection-> query($sql);

if ($result->rowCount() > 0){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<p class='containerText-Rating'>".$row['Round(AVG(rating),2)']."</p>";}}?>
 				<div class="containerIcon-DollarBox"><img src="Images\dollar.png" class="containerIcon-Dollar"></div>
        <p class="containerIcon-DollarText">INR 1000</p>
        <div class="containerIcon-LocationBox"><img src="Images\location.png" class="containerIcon-Location"></div>
        <p class="containerIcon-LocationText">Juhu</p>
 			</div></td>
 		</tr>
 		<td><div class="restaurantcontainer2">
 				<img class="containerlogo" src="Images\mcd.png">
 				<a href="mcd.php" class="containerText-Name2">McDonald's</a><br>
 				<p class="containerText-Cusine2">Fast Food</p>
 				<div class="containerIcon-BoxStar"><img src="Images\star.png" class="containerIcon-Star"></div>
 				<?php 

$sql = "Select Round(AVG(rating),2) from review WHERE restaurant='mcdonalds' ";
$result = $connection-> query($sql);

if ($result->rowCount() > 0){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<p class='containerText-Rating'>".$row['Round(AVG(rating),2)']."</p>";}}?>
        <div class="containerIcon-DollarBox"><img src="Images\dollar.png" class="containerIcon-Dollar"></div>
        <p class="containerIcon-DollarText">INR 300</p>
        <div class="containerIcon-LocationBox"><img src="Images\location.png" class="containerIcon-Location"></div>
        <p class="containerIcon-LocationText">Andheri</p>
 			</div></td>
 	</table>
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
<script type="text/javascript">
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("img1");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);
}
</script>
</html>