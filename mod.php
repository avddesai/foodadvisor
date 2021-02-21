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
 
  <?php include 'E:\MiniProject\CSS\Footer.css'; ?>
  <?php include 'E:\MiniProject\CSS\header.css'; ?>
.modr6{
height: 925px;
position: absolute;
width: 361px;
height: 980px;
left: 100px;
top: 650px;

background: #974646;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
}
.modrect1{
position: absolute;
width: 1185px;
height: 980px;
left: 537px;
top: 650px;

background: #974646;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
}
.modimage1{
position: absolute;
width: 235px;
height: 234px;
left: 63px;
top: 81px;
background: url(mojo.png);
}
.modimage2{
position: absolute;
width: 43px;
height: 39px;
left: 25px;
top: 370px;
}
.modimage3{
position: absolute;
width: 36px;
height: 36px;
left: 25px;
top: 470px;
}
.modimage4{
position: absolute;
width: 36px;
height: 36px;
left: 25px;
top: 570px;
}
.modimage5{
position: absolute;
width: 36px;
height: 36px;
left: 25px;
top: 670px;
}
.text1{
position: absolute;
width: 286px;
height: 78px;
left: 55px;
top: 350px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 26px;

color: #000000;
}
.text2{
position: absolute;
width: 286px;
height: 26px;
left: 60px;
top: 457px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 26px;

color: #000000;

}
.text3{
position: absolute;
width: 286px;
height: 26px;
left: 70px;
top: 557px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 26px;

color: #000000;

}
.text4{
position: absolute;
width: 286px;
height: 26px;
left: 70px;
top: 657px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 20px;
line-height: 26px;

color: #000000;

}
.button1{
position: absolute;
width: 249px;
height: 69px;
left: 59px;
top: 768px;

background: #985656;
border: 1px solid #000000;
box-sizing: border-box;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 15px;
}
.button1:focus{
  outline-width: 0px;
}
.buttontext{
position: absolute;
width: 183px;
height: 47px;
left: 32px;
top: -27px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 36px;
line-height: 47px;
/* identical to box height */
color: black;
}
.headingtext{
position: absolute;
width: 462.67px;
height: 65px;
left: 360px;
top: -20px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 50px;
line-height: 65px;
/* identical to box height */

text-align: center;

color: #000000;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.menu1{
position: absolute;
width: 387px;
height: 730px;
left: 100px;
top: 140px;
}
.menu2{
position: absolute;
width: 393px;
height: 702px;
left: 700px;
top: 140px;
}
.review-rect{
position: absolute;
width: 437px;
height: 730px;
left: 650px;
top: 140px;

background: #985656;
border-radius: 43px;
overflow: auto;
}
.innerreview{
width: 403px;
height: 168px;
overflow: auto;
background: #974646;
border-radius: 29px;
margin-top: 10px;
margin-bottom: 10px;
margin-right: 50px;
margin-left:10px;
}
.innerreview1{
position: absolute;
width: 403px;
height: 168px;

overflow: auto;
background: #974646;
border-radius: 29px;
margin-top: 10px;
margin-bottom: 10px;
}
.innerreview2{
position: absolute;
width: 403px;
height: 168px;
left: 18px;
top: 280px;
overflow: auto;
background: #974646;
border-radius: 29px;
margin-top: 10px;
margin-bottom: 10px;
}
.userimg{
position: absolute;
width: 24px;
height: 27px;
margin-left: 20px;
margin-top: 15px;
}
.starimg{
  position: absolute;
width: 26px;
height: 30px;
margin-left: 300px;
margin-top: 15px;
}
.username-text{
  position: absolute;
width: 130px;
height: 23px;
margin-left: 45px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 23px;
text-align: center;

color: #000000;
}
.rating-text{
position: absolute;
width: 29px;
height: 23px;
margin-left: 330px;
margin-bottom: 5px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 18px;
line-height: 23px;
text-align: center;

color: #000000;
}
.fullreview{
position: absolute;
width: 352px;
height: 81px;
overflow: auto;
background: #985656;
border-radius: 16px;
margin-top: 50px;
margin-left: 25px; 
}
.fullreview-text{
position: absolute;
width: 352px;
height: 50px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 13px;
line-height: 17px;
/* identical to box height */

text-align: center;

color: #000000;

}
.review-heading{
position: absolute;
width: 422.67px;
height: 65px;
left: 0px;
top: -40px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 50px;
line-height: 65px;
/* identical to box height */

text-align: center;

color: #000000;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
::-webkit-scrollbar {
  width: 20px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #985656; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #974646; 
}
</style>
<head>
	<title>MOD</title>
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
    <p class="t3">Review</p>
  </a>
  <a href="Index.php?logout=1" class="r4"> 
    <p class="t4">Logout</p>
  </a>
  </div>
  <?php } ?>
  <div class="r5">
  	<div class="modr6">
  		<img src="Images\mod.png" class="modimage1">
  		<img src="Images\loc.png" class="modimage2">
  		<p class="text1">G-39, Profit Centre,<br>Mahavir Nagar, Kandivali West<br></p>
  		<img src="Images\money.png" class="modimage3">
  		<p class="text2">₹400 for two people (approx.)</p>
  		<img src="Images\cus.png" class="modimage4">
  		<p class="text3">Cafe</p>
  		<img src="Images\rating.png" class="modimage5">
  		   <?php 
include('config.php');
$sql = "Select Round(AVG(rating),2) from review WHERE restaurant='Mad Over Donuts' ";
$result = $connection-> query($sql);

if ($result->rowCount() > 0){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<p class='text4'>".$row['Round(AVG(rating),2)']."</p>";}}?>
  		<button class="button1" onclick="window.location.href='review.php'"><p class="buttontext">Review Us!</p></button>
  	</div>
  	<div class="modrect1">
  		<p class="headingtext">Mad Over Donut</p>
  		<img src="Images\mod1.jpg" class="menu1">
  		<img src="Images\mod2.jpg" class="menu1">

  	<div class="review-rect">
        <p class="review-heading"></p>
        
         
<?php
 $servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "joinus";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$query = "Select uname,rating,review from review WHERE restaurant='Mad Over Donuts' "; 
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result)>0)
{ 
while($row = mysqli_fetch_array($result)){?>
              <div class='innerreview'> 
              <img class='userimg' src='Images\prof.png'><p class='username-text'><?php echo $row['uname'] ?></p><img class='starimg' src='Images\Rating.png'><p class='rating-text'><?php echo $row['rating']?></p><div class='fullreview'><p class='fullreview-text'> <?php echo $row['review']?></p></div></div>
              <?php
          }}?>
         </div>
         
      </div>
      <?php echo $counter;?>
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
  var x = document.getElementsByClassName("menu1");
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