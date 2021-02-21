<?php
 
include('config.php');
session_start();
if (!isset($_SESSION['username'])) { 
   $_SESSION['msg'] = "You have to log in first"; 
   //header('location: main.php'); 
} 

if (isset($_GET['logout'])) { 
   session_destroy(); 
   unset($_SESSION['username']); 
   header("location: index.html"); 
}  
if (isset($_POST['login'])) {
 
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
    $query->bindParam("username", $username, PDO::PARAM_STR);
    $query->execute();
 
    $result = $query->fetch(PDO::FETCH_ASSOC);
 
    if (!$result) {
        echo '<script type="text/javascript">',
     'myFunction();',
     '</script>'
;
    } else {
        if (password_verify($password, $result['password'])) {
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['username'] = $result['username'];
            #echo '<p class="success">Congratulations, you are logged in!</p>';
         header("location:Index.php");  exit;
         
        
        } else {
            echo '<script type="text/javascript">',
     'myFunction();',
     '</script>'
;
        }
    }
}
 
?>
<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Charm:wght@700&family=Cookie&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap" rel="stylesheet">
<?php include 'E:\MiniProject\CSS\Footer.css'; ?>
<?php include 'E:\MiniProject\CSS\header.css'; ?>
<style type="text/css">
.r1{
position: absolute;
width: 1852px;
height: 1446px;
left: 30px;
top: -507px;
border: 2px black solid;
background: rgba(203, 114, 114, 0.75);
border-radius: 26px;
}
.r2
{position: absolute;
width: 668px;
height: 685px;
left: 586px;
top: 670px;
background: #974646;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 74px;
border: 2px black solid;
}
.chilly1{
position: absolute;
width: 102px;
height: 152px;
left: 535px;
top: 676px;

background: url(chilly.png);
}
.chilly2{
position: absolute;
width: 102px;
height: 152px;
left: 1183px;
top: 1219px;

background: url(chilly.png);
}
.sign-in{
position: absolute;
width: 462.67px;
height: 65px;
left: 689px;
top: 694px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 50px;
line-height: 65px;
/* identical to box height */
text-align: center;
color: #FFFFFF;

text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.username{
position: absolute;
width: 402px;
height: 41px;
left: 774px;
top: 959px;
font-size: 25px;

background: #FFF1F1;
border: 2px solid #000000;
border-radius: 20px;

}
.username:focus {
    outline-width: 0;
}
.password{
position: absolute;
width: 402px;
height: 41px;
left: 774px;
top: 1020px;
font-size: 25px;
background: #FFF1F1;
border: 2px solid #000000;
border-radius: 20px;

}
.password:focus {
	outline-width: 0;
}
.username-text{
position: absolute;
width: 172px;
height: 64px;
left: 608px;
top: 930px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 47px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.password-text{
position: absolute;
width: 172px;
height: 64px;
left: 608px;
top: 995px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 47px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.forgotpassword-text{
position: absolute;
width: 344px;
height: 26px;
left: 616px;
top: 1300px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 15px;
line-height: 31px;
text-align: center;
color: #FFFFFF;
text-decoration: none;
}
.Register-text{
position: absolute;
width: 344px;
height: 26px;
left: 855px;
top: 1300px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 15px;
line-height: 31px;
text-align: center;
color: #FFFFFF;
text-decoration: none;
}
.rectbutton{
position: absolute;
width: 223px;
height: 64px;
left: 819px;
top: 1172px;
background: #985656;
border: 3px solid rgba(0, 0, 0, 0.75);
box-sizing: border-box;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
border-radius: 25px;
}
.rectbutton:focus{
	outline-width: 0;
}
.buttontext{
position: absolute;
width: 200px;
height: 26px;
left: 10px;
top: -12px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 24px;
line-height: 31px;
text-align: center;
color: #FFFFFF;
}
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
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
</style>
<head>
	<title>login Page</title>
</head>
<body bgcolor="black">
<div class="container">
<div class="navbar">
   <p class="heading">Food Advisor</p>
</div>
<div class="r1">
   <div class="r2"></div>
   <p class="sign-in">Sign-In</p>
   <img class="chilly1" src="Images\chilly.png">
   <img class="chilly2" src="Images\chilly.png">
<form method="post" name="signin-form">
    
        <p class="username-text">Username</p>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required class="username"  autocomplete="off"/>
    
    
        <p class="password-text">Password</p>
        <input type="password" name="password" required class="password"  autocomplete="off"/>
   
    <button type="submit" name="login" value="login" class="rectbutton" ><p class= buttontext>Log In</p></button>
    <a href="register.php" class="Register-text">Register here</a> 

    <a href="Index.php" class="forgotpassword-text">Join as Guest</a>
    <div id="snackbar">Please recheck your creditentials</div>

</form>
<p id="error"></p>
</div>
</div>
</body>
<script>
function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>
</html>