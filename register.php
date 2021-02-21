<?php
 
include('config.php');
session_start();
 
if (isset($_POST['register'])) {
 
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    
    $password_hash = password_hash($password, PASSWORD_BCRYPT);
 
    $query = $connection->prepare("SELECT * FROM users WHERE EMAIL=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
 
    if ($query->rowCount() > 0) {
        echo '<p class="error">The email address is already registered!</p>';
    }
   
   elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {

       echo '<p class="error">The email address is not valid</p>';
     
     }
 
    elseif ($query->rowCount() == 0) {
        $query = $connection->prepare("INSERT INTO users(USERNAME,PASSWORD,EMAIL) VALUES (:username,:password_hash,:email)");
        $query->bindParam("username", $username, PDO::PARAM_STR);
        $query->bindParam("password_hash", $password_hash, PDO::PARAM_STR);
        $query->bindParam("email", $email, PDO::PARAM_STR);
        $result = $query->execute();
 
        if ($result) {
            echo 'Your registration was successful!';
            header( 'Location: Login-In Page.php' ) ;
        } else {
            echo '<p class="error">Something went wrong! Username already taken</p>';
        }
    }
}
 
?>
<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css2?family=Calistoga&family=Charm:wght@700&family=Cookie&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Calligraffitti&display=swap" rel="stylesheet">

<style type="text/css">
<?php include 'E:\MiniProject\CSS\Footer.css'; ?>

<?php include 'E:\MiniProject\CSS\header.css'; ?>
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
top: 654px;

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
top: 830px;
font-size: 25px;
background: #FFF1F1;
border: 2px solid #000000;
border-radius: 20px;
}
.username:focus {
    outline-width: 0;
}
.email{
position: absolute;
width: 402px;
height: 41px;
left: 774px;
top: 890px;
font-size: 25px;
background: #FFF1F1;
border: 2px solid #000000;
border-radius: 20px;

}
.email:focus {
	outline-width: 0;
}
.number{
position: absolute;
width: 402px;
height: 41px;
left: 774px;
top: 950px;
font-size: 25px;
background: #FFF1F1;
border: 2px solid #000000;
border-radius: 20px;

}
.number:focus {
   outline-width: 0;
}
.password{
position: absolute;
width: 402px;
height: 41px;
left: 774px;
top: 1010px;
font-size: 25px;
background: #FFF1F1;
border: 2px solid #000000;
border-radius: 20px;

}
.password:focus {
   outline-width: 0;
}
.confirm_password{
position: absolute;
width: 402px;
height: 41px;
left: 774px;
top: 1070px;
font-size: 25px;
background: #FFF1F1;
border: 2px solid #000000;
border-radius: 20px;

}
.confirm_password:focus {
   outline-width: 0;
}
.username-text{
position: absolute;
width: 172px;
height: 64px;
left: 608px;
top: 805px;

font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 47px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.email-text{
position: absolute;
width: 172px;
height: 64px;
left: 608px;
top: 865px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 47px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.number-text{
position: absolute;
width: 172px;
height: 64px;
left: 608px;
top: 925px;
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
top: 985px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 47px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.confirm_password-text{
position: absolute;
width: 172px;
height: 64px;
left: 608px;
top: 1045px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 25px;
line-height: 47px;
text-align: center;
color: #FFFFFF;
text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.termsandcondtion{
position: absolute;
width: 658px;
height: 16px;
left: 590px;
top: 1233px;
font-family: Calistoga;
font-style: normal;
font-weight: normal;
font-size: 14px;
line-height: 18px;
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
.Register-text{
position: absolute;
width: 344px;
height: 26px;
left: 755px;
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
</style>
<head>
	<title>Register Page</title>
</head>
<body bgcolor="black">
  <div class="container">
<div class="navbar">
   <p class="heading">Food Advisor</p>
</div>
<div class="r1">
   <div class="r2"></div>
<form method="post" action="" name="signup-form" class="container">
    <p class="sign-in">Register</p>
   <img class="chilly1" src="Images\chilly.png">
   <img class="chilly2" src="Images\chilly.png">
     
        <p class="username-text">Username</p>
        <input type="text" name="username" pattern="[a-zA-Z0-9]+" required class="username" autocomplete="off"/>
    
    
        <p class="email-text">Email</p>
        <input type="email" name="email" required  class="email" autocomplete="off"/>
    
        <input type="numbers" name="numbers" class="number" autocomplete="off"></input>
   <p class="number-text">Contact No.</p>
        <p class="password-text">Password</p>
        <input type="password" name="password" required class="password" autocomplete="off"/>
    <input type="password" name="confirm_password" class="confirm_password" autocomplete="off"></input>
   <p class="confirm_password-text">Re-Enter Password</p>
    <button type="submit" name="register" value="register" class="rectbutton">Register</button>
     <a href="Login-In Page.php" class="Register-text"> 
         Already having an account? 
         
      </a>
         
</form>
</div>
</body>
</html>