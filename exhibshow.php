<!DOCTYPE html>
<html>
<title>ART MUSEUM MANAGEMENT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="fontawesome.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.5;
}
.active
{background-color: #CDCDCD; color: black;}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('int.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("exh2.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("int3.jpeg");
    min-height: 400px;
}

.wide {letter-spacing: 10px;}
.hover-opacity {cursor: pointer;}

}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="top">
  <div class="bar" id="myNavbar">
    <a class="bar-item button hover-black hide-medium hide-large right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="home.php" class="bar-item button hide-small"><i class="fa fa-home"></i> HOME</a>
    <a href="artifacts.php" class="bar-item button hide-small"><i class="fa fa-th"></i> ARTIFACTS</a>
    <a href="exhibshow.php" class="bar-item button active"><i class="fa fa-picture-o"></i> EXHIBITIONS</a>
    <a href="visitor.php" class="bar-item button hide-small"><i class="fa fa-user"></i> VISIT US</a>
    <a href="admin.php" class="bar-item button hide-small"><i class="fa fa-user"></i> ADMIN</a>
    <a style="float:right" href="#about" class="bar-item button hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a style="float:right" href="#contact" class="bar-item button hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    </a>
  </div>
</div>
 
</header>
<footer class="container padding-8 center" style="width:1300px;height:100px">  
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
