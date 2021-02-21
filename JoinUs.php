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
<?php
$insert=false;
if(isset($_POST['RestaurantName']))
{
 $server = "localhost";
 $username = "root";
 $password = "";

 
 $con = mysqli_connect($server, $username, $password);
 if(!$con){
    die("connection to this database failed due to" . mysqli_connect_error());
}
// echo "Success connecting to the db";
$RestaurantName=$_POST['RestaurantName'];
$locality=$_POST['locality'];
$address=$_POST['address'];
$cost=$_POST['cost'];
$timings=$_POST['timings'];
$contact=$_POST['contact'];
$logo=$_POST['logo'];
$tor=$_POST['tor'];



$sql=" INSERT INTO `joinus`.`joinus` (`srno`, `name`, `locality`, `address`, `amount`, `timing`, `contactno`, `logo`, `cuisine`, `date`) VALUES (NULL, '$RestaurantName', '$locality', '$address', '$cost', '$timings', '$contact', '$logo', '$tor', current_timestamp()); ";
// echo $sql;

if($con->query($sql) == true){
    // echo "Successfully inserted";

    // Flag for successful insertion
    $insert = true;
    
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}



?>
<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Charm:wght@700&family=Cookie&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap" rel="stylesheet">
<style type="text/css">
.navbar{
z-index: 1000;
position: absolute;	
width: 1920px;
height: 103.25px;
left: -2px;
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
.r9{
position: absolute;
width: 1910px;
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
.rect1{
position: absolute;
width: 1910px;
height: 1641px;
left: 0px;
top: -507px;
background: rgba(203, 114, 114, 0.75);
border-radius: 26px;
}
.rect2{
position: absolute;
width: 1840px;
height: 1490px;
left: 30px;
top: 120px;

background: #974646;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 10px;
border: 5px solid #000000;
}
.contactus{
position: absolute;
width: 666px;
height: 133px;
left: 600px;
top: 430px;
font-family: Cookie;
font-style: normal;
font-weight: normal;
font-size: 80px;
line-height: 111px;
text-align: center;
color: #FFFFFF;
mix-blend-mode: hard-light;
}
.rect3{
position: absolute;
width: 1600px;
height: 732px;
left: 121px;
top: 625px;
background: #974646;
border-radius: 26px;
}
section.center {
  margin: auto;
  align-self: center; 
  width: 50%;
  padding: 10px;
  top: 20px;
  border-radius: 25px;
}
.chillypng3{
position: absolute;
width: 102px;
height: 152px;
left: 15px;
top: 1150px;
background: url(chilly.png);
}
.chillypng4{
position: absolute;
width: 102px;
height: 152px;
left: 1800px;
top: 1150px;
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
.form{
width: 300px; height: 300px; margin: 0 auto; 
}
</style>
<head>
	<title>Join Us</title>
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
  <a href="JoinUs.php" class="r3"> 
    <p class="t3">Contact Us</p>
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
  <a href="JoinUs.php" class="r3"> 
    <p class="t3">Contact Us</p>
  </a>
  <a href="Index.php?logout=1" class="r4"> 
    <p class="t4">Logout</p>
  </a>
  </div>
  <?php } ?>
 <div class="rect1">
 	<div class="rect2">
 		<p class="contactus">Contact Us!</p>
 		<br>
 		<div class="rect3">
 <section class="center" style= "background-color :rgba(203, 114, 114, 0.75); height: 700px; width:1400px;align:center; border: 3px solid black;" >

<!--form starts here-->
<div class="form">
<form id="myform" action="" method="post">
	<fieldset style="height: 665px;">
	<legend style="font-size: 20px;font-weight: bold;"><b>Addition of Restaurant</b></legend>
  <label for="RestaurantName"><b>Name<b></label><br>
  <input type="text" id="RestaurantName" name="RestaurantName" placeholder="RestaurantName" autocomplete="off" style="outline-width: 0px;" ><br>
 <label for="locality"><b>Locality<b></label><br>
 <input type="text" id="localities" list="locality" name="locality" autocomplete="off" style="outline-width: 0px;">
 <datalist id="locality">  
 <option value="Borivali">  
 <option value="Juhu">  
 <option value="Andheri">   
 <option value="Vile Parle">   
 <option value="Bandra">   
 <option value="Dadar">   
 <option value="Malad">   
 <option value="Goregaon">   
 <option value="Dahisar">   
 <option value="Chruchgate">   
 <option value="Mumbai central">   
 </datalist><br> 
 <label for="Address" style="align-items: center;"><b>Issue<b></label><br>
  <textarea rows="4" cols="22" name="address" form="myform" placeholder="Enter your issue here" autocomplete="off" style="outline-width: 0px;"></textarea><br>
  <label for="cost"><b>Amount Spent If any<b></label><br>
  <input type="number" id="cost" name="cost" placeholder="Min. cost for 2 people" autocomplete="off" style="outline-width: 0px;"><br>
  
  <label for="contact"><b>Contact Number<b></label><br>
  <input type="number" id="contact" name="contact" placeholder="Contact Number" autocomplete="off" style="outline-width: 0px;"><br>
  <label for="logo"><b>Screenshot of the issue<b></label><br>
  <input type="file" id="logo" name="logo" placeholder="Enter Your Screenshot" autocomplete="off" style="outline-width: 0px;"><br>
  <br>
  <b>Type Of Complaint<b><br>
  <input type="radio" id="cafe" name="tor" value="Cafe">
  <label for="cafe">Against a restaurant</label><br>
  <input type="radio" id="indian" name="tor" value="Indian">
  <label for="indian">Against a review</label><br>
  <input type="radio" id="fastfood" name="tor" value="FastFood">
  <label for="fastfood">Against us</label><br>
  
  <br>
  <input type="submit" value="Submit">
  </fieldset>
</form>
</div>
</section>
<!--form ends here-->

 
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
      <li><a  href="Index.html" style="text-decoration: none;color: black;">Home</a></li>
      <li><a  href="#" style="text-decoration: none;color: black;">Restaurants</a></li>
      <li><a  href="#" style="text-decoration: none;color: black;">Join Us</a></li>
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