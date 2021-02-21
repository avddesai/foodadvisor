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
  .navbar{
z-index: 1000;
position: absolute; 
width: 1920px;
height: 103.25px;
left: -4px;
top: -10px;
background: #EE2727;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 500px;
border: 1px solid #000000;
}
.r1 {
position: absolute;
width: 186.67px;
height: 63px;
left: 2px;
top: 0px;
background: #EE2727;
border-width: 0px;
text-decoration: none;
}
.dropdown {
  float: left;
  overflow: hidden;
}
.r2{
position: absolute;
width: 186.67px;
height: 63px;
left: 188.67px;
top: 0px;
background: #EE2727;
border-width: 0px;
text-decoration: none;
}
.r3{
position: absolute;
width: 186.67px;
height: 63px;
left: 1551.33px;
top: 0px;
background: #EE2727;
border-width: 0px;
text-decoration: none;
}
.r4{
position: absolute;
width: 186.67px;
height: 63px;
left: 1734.67px;
top: 0px;
background: #EE2727;
border-width: 0px;
text-decoration: none;
}

.t1{
position: relative;
width: 76px;
height: 20px;
left: 50px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 27px;
color: #000000;
}
.t2{
width: 156px;
height: 27px;
left: 204.67px;
top: 0px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 27px;
text-align: center;
color: #000000;
}
.t3{
width: 134.67px;
height: 27px;
left: 1576.67px;
top: 22px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 27px;
text-align: center;
color: #000000;
}
.t4{
width: 98.67px;
height: 27px;
left: 1779.33px;
top: 25px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 27px;
text-align: center;
color: #000000;
}
.heading{
overflow-y: auto;
position: absolute;
width: 462.67px;
height: 65px;
left: 724.67px;
top: -25px;
font-family: Calistoga;
font-style: bold;
font-weight: normal;
font-size: 50px;
line-height: 50px;
text-align: center;
color: #000000;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.r5{
position: absolute;
width: 1832px;
height: 1641px;
left: 30px;
top: -507px;
background: rgba(203, 114, 114, 0.75);
border-radius: 26px;
}
.r6{
position: absolute;
width: 361px;
height: 980px;
left: 100px;
top: 650px;

background: #974646;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
}
.r7{position: absolute;
width: 361px;
height: 980px;
left: 1370px;
top: 650px;

background: #974646;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
}
.r8{
position: absolute;
width: 679px;
height: 980px;
left: 570px;
top: 650px;

background: #974646;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
overflow: auto;
}
.text{
position: absolute;
width: 462.67px;
height: 65px;
left: 115px;
top: -20px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 50px;
line-height: 65px;
text-align: center;

color: #FFFFFF;


text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.text1{
position: absolute;
width: 462.67px;
height: 65px;
left: -50px;
top: -20px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 50px;
line-height: 65px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.text2{
position: absolute;
width: 462.67px;
height: 65px;
left: -50px;
top: -20px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 50px;
line-height: 65px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.restaurantcontainer{
position: absolute;
width: 655px;
height: 164.17px;
left: 10px;
top: 115px;


background: #E9DEDE;
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 25px;
}
.restaurantcontainer2{
position: absolute;
width: 655px;
height: 164.17px;
left: 10px;
top: 285px;

background: #E9DEDE;
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 25px;
}
.restaurantcontainer3{
position: absolute;
width: 655px;
height: 164.17px;
left: 10px;
top: 455px;

background: #E9DEDE;
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 25px;
}
.restaurantcontainer4{
position: absolute;
width: 655px;
height: 164.17px;
left: 10px;
top: 625px;

background: #E9DEDE;
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 25px;
}
.restaurantcontainer5{
position: absolute;
width: 655px;
height: 164.17px;
left: 10px;
top: 795px;

background: #E9DEDE;
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 25px;
}
.restaurantcontainer6{
position: absolute;
width: 655px;
height: 164.17px;
left: 10px;
top: 965px;

background: #E9DEDE;
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 25px;
}
.containerlogo{
position: absolute;
width: 160.25px;
height: 125.61px;
left: 10px;
top: 15px;
filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
}
.containerText-Name{
position: absolute;
width: 255.06px;
height: 36.36px;
left: 180px;
top: 20px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 32px;
text-align: left;
color: #000000;
text-decoration: none;
}
.containerText-Cusine{
position: absolute;
width: 255.06px;
height: 36.36px;
left: 180px;
top: 35px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 17px;
line-height: 32px;
text-align: left;
color: #000000;
}
.containerIcon-BoxStar{
position: absolute;
width: 40px;
height: 50px;
left: 560px;
top: 33px;
size: 40px;
}
.containerIcon-Star{
position: absolute;
left: 8.33%;
right: 8.33%;
top: 8.33%;
bottom: 12.5%;
background: #E9DEDE;
box-sizing: border-box;
width:25px;
}
.containerText-Rating{
position: absolute;
width: 29.38px;
height: 22.04px;
left: 590px;
top: 26px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 15px;
line-height: 19px;
text-align: left;
color: #000000;
}

.containerIcon-DollarBox{
position: absolute;
width: 32.05px;
height: 26.44px;
left: 170px;
top: 115px;
}

.containerIcon-Dollar{
position: absolute;
left: 26.33%;
right: 31.25%;
top: 12.5%;
bottom: 12.5%;
background: #E9DEDE;
width: 25px;
}

.containerIcon-DollarText{
position: absolute;
width: 88.14px;
height: 22.04px;
left: 190px;
top: 107px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 15px;
line-height: 19px;
text-align: center;
color: #000000;
}

.containerIcon-LocationBox{
position: absolute;
width: 32.05px;
height: 26.44px;
left: 470px;
top: 117px;
}

.containerIcon-Location{
position: absolute;
left: 8.33%;
right: 8.33%;
top: 8.33%;
bottom: 8.33%;
background: #E9DEDE;
width: 25px;
}

.containerIcon-LocationText{
position: absolute;
width: 46.74px;
height: 22.04px;
left: 500px;
top: 107px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 15px;
line-height: 19px;
text-align: center;
color: #000000;
} 
.r9{
position: absolute;
width: 1900px;
height: 552px;
left: 0px;
top: 1340px;
background: #985656;
border-radius: 25px;
}

.r10{
position: absolute;
width: 1851.89px;
height: 476.34px;
left: 24px;
top: 40px;
background: #974646;
box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.25);
border: 5px solid #000000;
border-radius: 15px;
}

.logopng{
position: absolute;
width: 200px;
height: 200px;
left: 463px;
top: 50px;

background: url(Images\logo.png);
filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
}

.footerText{
position: absolute;
width: 142px;
height: 59px;
left: 754px;
top: 40px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 32px;
text-align: center;
color: #000000;
}

.footerText1{
position: absolute;
width: 142px;
height: 59px;
left: 1014px;
top: 40px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 32px;
text-align: center;
color: #000000;
}

.footerText2{
position: absolute;
width: 300px;
height: 59px;
left: 1274px;
top: 40px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 32px;
text-align: center;
color: #000000;
}

.footerListPages{
position: absolute;
width: 116px;
height: 50px;
left: 750px;
top: 80px;
font-family: Calligraffitti;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 39px;
color: #000000;
}

.footerListCuisine{
position: absolute;
width: 116px;
height: 50px;
left: 1010px;
top: 80px;
font-family: Calligraffitti;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 39px;
color: #000000;
}

.footerListLocations{
position: absolute;
width: 116px;
height: 50px;
left: 1280px;
top: 80px;
font-family: Calligraffitti;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 39px;
color: #000000;
}

.footerAddress{
position: absolute;
width: 142px;
height: 59px;
left: 455px;
top: 320px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 32px;
text-align: center;
color: #000000;
}

.footerContact{
position: absolute;
width: 142px;
height: 59px;
left: 465px;
top: 370px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 32px;
text-align: center;
color: #000000;
}

.footerAddressText{
position: absolute;
width: 397px;
height: 39px;
left: 591px;
top: 320px;
font-family: Calligraffitti;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 39px;
color: #000000;
}

.footerContactText{
position: absolute;
width: 284px;
height: 39px;
left: 612px;
top: 370px;

font-family: Calligraffitti;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 39px;

color: #000000;
}

.chillypng3{
position: absolute;
width: 102px;
height: 152px;
left: 15px;
top: 1180px;
background: url(chilly.png);
}
.chillypng4{
position: absolute;
width: 102px;
height: 152px;
left: 1800px;
top: 1180px;
background: url(chilly.png);
}
.line2{
position: absolute;
width: 1691.14px;
height: 0.4px;
left: 100px;
top: 1220px;
border: 3px solid #FFFFFF;
transform: matrix(1, 0, 0, -1, 0, 0);
border-radius: 5px;
}
.location1{
position: absolute;
width: 104px;
height: 47px;
left: 119px;
top: 139px;
text-align: center;
text-decoration: none;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 47px;
color: #FFFFFF;
}
.location2{
position: absolute;
width: 104px;
height: 47px;
left: 119px;
top: 289px;
text-decoration: none;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 47px;
text-align: center;
color: #FFFFFF;
}
.location3{
position: absolute;
width: 104px;
height: 47px;
left: 119px;
top: 439px;
text-decoration: none;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 47px;
text-align: center;
color: #FFFFFF;
}
.location4{
position: absolute;
width: 104px;
height: 47px;
left: 119px;
top: 589px;
text-decoration: none;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 47px;
text-align: center;
color: #FFFFFF;
}
.location5{
position: absolute;
width: 104px;
height: 47px;
left: 119px;
top: 739px;
text-decoration: none;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 47px;
text-align: center;
color: #FFFFFF;
}
.location6{
position: absolute;
width: 104px;
height: 47px;
left: 130px;
top: 139px;
text-align: center;
text-decoration: none;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 47px;
color: #FFFFFF;
}
.location7{
position: absolute;
width: 104px;
height: 47px;
left: 130px;
top: 289px;
text-align: center;
text-decoration: none;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 47px;
color: #FFFFFF;
}
.location8{
position: absolute;
width: 104px;
height: 47px;
left: 130px;
top: 439px;
text-align: center;
text-decoration: none;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 47px;
color: #FFFFFF;
}
.location9{
position: absolute;
width: 104px;
height: 47px;
left: 130px;
top: 589px;
text-align: center;
text-decoration: none;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 47px;
color: #FFFFFF;
}
.location10{
position: absolute;
width: 104px;
height: 47px;
left: 130px;
top: 739px;
text-align: center;
text-decoration: none;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 30px;
line-height: 47px;
color: #FFFFFF;
}
</style>
<head>
	<title>Vile Parle Restaurant</title>
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
  	<div class="r6">
  		<p class="text1">Locations</p>
      <a href="malad.php" class="location1">Malad</a>
      <a href="kandivali.php" class="location2">Kandivali</a>
      <a href="borivali.php" class="location3">Borivali</a>
      <a href="dahisar.php" class="location4">Dahisar</a>
      <a href="goregaon.php" class="location5">Goregaon</a>
  	</div>
  	<div class="r8">
  		<p class="text">List Of Restaurants</p>
  		<div class="restaurantcontainer">
 		<img class="containerlogo" src="Images\aditi.png">
 		<a href="#" class="containerText-Name">Aditi Fast Food</a><br>
 		<p class="containerText-Cusine">Fast Food</p>
 		<div class="containerIcon-BoxStar"><img src="Images\star.png" class="containerIcon-Star"></div>
 		<p class="containerText-Rating">4.3</p><br>
 		<div class="containerIcon-DollarBox"><img src="Images\dollar.png" class="containerIcon-Dollar"></div>
        <p class="containerIcon-DollarText">INR 500</p>
        <div class="containerIcon-LocationBox"><img src="Images\location.png" class="containerIcon-Location"></div>
        <p class="containerIcon-LocationText">Vile Parle</p>
 		</div>
 		<div class="restaurantcontainer2">
 		<img class="containerlogo" src="Images\tea.png">
 		<a href="tea.php" class="containerText-Name">Tea Villa Cafe</a><br>
 		<p class="containerText-Cusine">Cafe</p>
 		<div class="containerIcon-BoxStar"><img src="Images\star.png" class="containerIcon-Star"></div>
 		<?php 
include('config.php');
$sql = "Select Round(AVG(rating),2) from review WHERE restaurant='Tea Villa Cafe' ";
$result = $connection-> query($sql);

if ($result->rowCount() > 0){
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
      echo "<p class='containerText-Rating'>".$row['Round(AVG(rating),2)']."</p>";}}?>
 		<div class="containerIcon-DollarBox"><img src="Images\dollar.png" class="containerIcon-Dollar"></div>
        <p class="containerIcon-DollarText">INR 1000</p>
        <div class="containerIcon-LocationBox"><img src="Images\location.png" class="containerIcon-Location"></div>
        <p class="containerIcon-LocationText">Vile Parle</p>
 		</div>
 		<div class="restaurantcontainer3">
 		<img class="containerlogo" src="Images\romano.png">
 		<a href="#" class="containerText-Name">Romano's</a><br>
 		<p class="containerText-Cusine">Italian</p>
 		<div class="containerIcon-BoxStar"><img src="Images\star.png" class="containerIcon-Star"></div>
 		<p class="containerText-Rating">4.6</p><br>
 		<div class="containerIcon-DollarBox"><img src="Images\dollar.png" class="containerIcon-Dollar"></div>
        <p class="containerIcon-DollarText">INR 1300</p>
        <div class="containerIcon-LocationBox"><img src="Images\location.png" class="containerIcon-Location"></div>
        <p class="containerIcon-LocationText">Vile Parle</p>
 		</div>
 		<div class="restaurantcontainer4">
 		<img class="containerlogo" src="Images\aqua.png">
 		<a href="#" class="containerText-Name">AquaFire</a><br>
 		<p class="containerText-Cusine">Italian</p>
 		<div class="containerIcon-BoxStar"><img src="Images\star.png" class="containerIcon-Star"></div>
 		<p class="containerText-Rating">4.5</p><br>
 		<div class="containerIcon-DollarBox"><img src="Images\dollar.png" class="containerIcon-Dollar"></div>
        <p class="containerIcon-DollarText">INR 1400</p>
        <div class="containerIcon-LocationBox"><img src="Images\location.png" class="containerIcon-Location"></div>
        <p class="containerIcon-LocationText">Vile Parle</p>
 		</div>
 		<div class="restaurantcontainer5">
 		<img class="containerlogo" src="Images\rama.png">
 		<a href="#" class="containerText-Name">Rama Krishna </a><br>
 		<p class="containerText-Cusine">Indian</p>
 		<div class="containerIcon-BoxStar"><img src="Images\star.png" class="containerIcon-Star"></div>
 		<p class="containerText-Rating">4.3</p><br>
 		<div class="containerIcon-DollarBox"><img src="Images\dollar.png" class="containerIcon-Dollar"></div>
        <p class="containerIcon-DollarText">INR 1000</p>
        <div class="containerIcon-LocationBox"><img src="Images\location.png" class="containerIcon-Location"></div>
        <p class="containerIcon-LocationText">Vile Parle</p>
 		</div>
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