
<!DOCTYPE html>
<html>
<title>BLOOD BANK MANAGEMENT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="adm.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="fa.css">
<style>
.error {color: whitesmoke;}
body {
   margin:0;
   padding:0;
  }
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-envelope {font-size:200px;}
.fa-tint{font-size: 350px;}
</style>
<body>

<!-- Navbar -->
<div class="top">
  <div class="bar red card-2 left-align large">
    <a href="home.php" class="bar-item button hide-small padding-large hover-white">HOME</a>
    <a href="donate.php" class="bar-item button hide-small padding-large hover-white">DONATE</a>
    <a href="accept.php" class="bar-item button hide-small padding-large hover-white">REQUEST</a>
    <a href="search.php" class="bar-item button hide-small padding-large hover-white">CHECK AVAILABILITY</a>
    <a href="camplist.php" class="bar-item button hide-small padding-large hover-white">CAMPS</a>
    <a href="admin.php" class="bar-item button hide-small padding-large hover-white" style="float:right">ADMIN</a>
 </div>


<br><br><br><br><br><br><br><br>

<div class="display-container opacity-min" id="home">
  <div class="display-middle" style="white-space:nowrap;">
    <h1><span class="center padding-large black xlarge wide animate-opacity">ADMINISTRATION LOGIN</span></h1>
  </div>
</div>

     <div id="login">


<?php

include("config.php");
$usernameErr = $passwordErr =$error="";
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if (empty($_POST["username"])) 
  {
    $usernameErr = " Username is required";
  } 
  if(empty($_POST["password"]))
  {
    $passwordErr = " Password is required";
  } 
// username and password sent from Form
$myusername=mysqli_real_escape_string($db,$_POST['username']); 
$mypassword=mysqli_real_escape_string($db,$_POST['password']); 
$sql="SELECT username FROM admin WHERE username='$myusername' and password='$mypassword'";
$result=mysqli_query($db,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$active=$row['active'];
$count=mysqli_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$myusername;

header("location: welcome.php");
}
else 
{
if((!empty($_POST["username"]))and(!empty($_POST["password"]))and($count!=1))
$error=" Your Login Name or Password is Invalid";
}
}
?>

      <form method="POST" action="">
        <span class="fa  fa-user"></span>
          <input type="text" name="username" placeholder="Username...">
          
       
        <span class="fa fa-lock"></span>
          <input type="password" name="password" placeholder="Password...">    
        <input type="submit" value="LOGIN">

</form>
<br>
<span class="error">* <?php echo $error;?></span><br>
<span class="error">* <?php echo $usernameErr;?></span><br>
<span class="error">* <?php echo $passwordErr;?></span><br>
<footer class="container padding-650 center opacity">  
  <div class="xlarge padding-64">
    <i class="fa fa-facebook-official hover-opacity"></i>
    <i class="fa fa-instagram hover-opacity"></i>
    <i class="fa fa-snapchat hover-opacity"></i>
    <i class="fa fa-pinterest-p hover-opacity"></i>
    <i class="fa fa-twitter hover-opacity"></i>
    <i class="fa fa-linkedin hover-opacity"></i>
 </div>
</footer>
</body>
</html>