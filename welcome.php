<?php
include('lock.php');
?>
<!DOCTYPE html>
<html>
<title>BLOOD BANK MANAGEMENT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="fa.css">
<style>
body {
   margin:0;
   padding:0;
   background-color: black;
  }
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-envelope {font-size:200px;}
.fa-tint{font-size: 350px;}
</style>
<body>

<!-- Header -->
<div class="top">
  <div class="bar red card-2 left-align large">
    <a href="camp.php" class="bar-item button hide-small padding-large hover-white">ADD CAMPS</a>
    <a href="camplist.php" class="bar-item button hide-small padding-large hover-white">SHOW CAMPS</a>
    <a href="listda.php" class="bar-item button hide-small padding-large hover-white">SHOW DONORS</a>
    <a href="listda2.php" class="bar-item button hide-small padding-large hover-white">SHOW REQUESTS</a>
    <a href="logout.php" class="bar-item button hide-small padding-large hover-white">LOGOUT</a>
 </div>
<div>
<header class="container red center" style="padding:350px 16px">
  <div class="display-middle" style="white-space:nowrap;">
    <span class="center padding-large black xxlarge wide animate-opacity">WELCOME <?php echo $login_session; ?> !</span><br><br>
  <div>
</header>

<footer class="container padding-650 center opacity">  
  <div class="xlarge padding-128">
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