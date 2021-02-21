<?php 
$uname=$_POST['uname'];
$contactno=$_POST['contactno'];
$restaurant=$_POST['restaurant'];
$rating=$_POST['rating'];
$review=$_POST['review'];

$conn = new mysqli('localhost','root','','joinus');
if($conn->connect_error){
  die("Connection Failed : ".$conn->connect_error);
}else{
  $stmt = $conn->prepare("Insert into review (srno,uname,contactno,restaurant,rating,review) values(NULL,'$uname','$contactno','$restaurant','$rating','$review')");
  $result=$stmt->execute();
  
  
  if($result){
    echo "Thanks For Reviewing";
    
  }
  else{
    echo "Retry later";
  }
  $stmt->close();
  $conn->close();
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
.rect1{
position: absolute;
width: 1324px;
height: 809px;
left: 248px;
top: 709px;

background: #974646;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 74px;
}
.image1{
position: absolute;
width: 102px;
height: 152px;
left: 229px;
top: 647px;
}
.image2{
position: absolute;
width: 102px;
height: 152px;
left: 1481px;
top: 1437px;
}
.headingreview{
position: absolute;
width: 462.67px;
height: 47px;
left: 425px;
top: 0px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 40px;
line-height: 47px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.text1{
position: absolute;
width: 172px;
height: 64px;
left: 158px;
top: 121px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 39px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.text2{
position: absolute;
width: 172px;
height: 64px;
left: 158px;
top: 196px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 39px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.text3{
position: absolute;
width: 200px;
height: 64px;
left: 158px;
top: 261px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 39px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.text4{
position: absolute;
width: 200px;
height: 64px;
left: 158px;
top: 331px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 39px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.text5{
position: absolute;
width: 200px;
height: 64px;
left: 158px;
top: 401px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 39px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.input1{
position: absolute;
width: 50%;
height: 41px;
left: 378px;
top: 121px;
background: #FFF1F1;
border: 2px solid #000000;
border-radius: 20px;
}
.input1:focus{
	outline-width: 0px;
}
.input2{
position: absolute;
width: 50%;
height: 41px;
left: 378px;
top: 191px;
background: #FFF1F1;
border: 2px solid #000000;
border-radius: 20px;
}
.input2:focus{
	outline-width: 0px;
}
.input3{
position: absolute;
width: 50%;
height: 41px;
left: 378px;
top: 261px;
background: #FFF1F1;
border: 2px solid #000000;
border-radius: 20px;
}
.input3:focus{
	outline-width: 0px;
}
.input4{
position: absolute;
width: 50%;
height: 41px;
left: 378px;
top: 331px;
background: #FFF1F1;
border: 2px solid #000000;
border-radius: 20px;
}
.input4:focus{
	outline-width: 0px;
}
.input5{
position: absolute;
width: 50%;
height: 200px;
left: 378px;
top: 401px;
background: #FFF1F1;
border: 2px solid #000000;
border-radius: 20px;
}
.input5:focus{
	outline-width: 0px;
}
.buttontosubmit{
position: absolute;
width: 223px;
height: 64px;
left: 559px;
top: 650px;

background: #985656;
border: 3px solid rgba(0, 0, 0, 0.75);
box-sizing: border-box;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 25px;
}
.buttontosubmit:focus{
	outline-width: 0px;
}
.submitbuttontext{
position: absolute;
width: 344px;
height: 26px;
left: -60px;
top: -10px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 24px;
line-height: 31px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
</style>
<head>
	<title>Review Page</title>
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
  	<div class="rect1">
  		<p class="headingreview">Review</p>
  		<form id="reviewform"  action="" method="post">
  		<input type="text" name="uname" id="uname" placeholder="Enter your name." class="input1" autocomplete="off" required>
  		<label for="username" class="text1">Username</label>
  		<input type="text" name="contactno" id="contactno" placeholder="Enter your contact number." class="input2" autocomplete="off" required>
  		<label for="contactnumber" class="text2">Contact No.</label>
  		<input type="text" name="restaurant" id="restaurant" placeholder="Where did you visit?" class="input3" autocomplete="off" required>
  		<label for="restaurantname" class="text3">Restaurant Name</label>
  		<input type="text" name="rating" id="rating" placeholder="Rate your experience." class="input4" autocomplete="off" required>
  		<label for="rating" class="text4">Rating</label>
  		 <textarea name="review" id="review" rows="10" cols="30" placeholder="Tell us more." class="input5" autocomplete="off" required></textarea>
  		<label for="review" class="text5">How was the experience</label>
  		<input type="submit" form="reviewform" class="buttontosubmit">
  		
  	</form>
  	</div>
  	<img src="Images\chilly.png" class="image1">
    <img src="Images\chilly.png" class="image2">
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