<!DOCTYPE html>
<html>
<title>LIBRARY MANAGEMENT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="fa.css">
<style>
.error {color: #FF0000;}
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;background: lightgray; }
.bar,h1,button {font-family: "Montserrat", sans-serif}

input[type=text],input[type=number],textarea
{
width:100%;
padding: 12px;
margin:10px 0;
box-sizing:border-box;
border:3px solid #ccc;
border-radius:5px;
-webkit-transition:0.5s;
tram=nsition:0.5s;
outline:none;
}
.search
{
width: 100%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url("searchicon.png");
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    text-align:center;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus,input[type=number]:focus,textarea:focus
{
border-radius:5px;
border:3px solid #555;
}

input[type=submit]
{
width:100%;
padding:15px;
color:white;
background-color:#707070;
margin:10px 0;
border:none;
border-radius:5px;
cursor:pointer;
font-family:28px;
}

input[type=submit]:hover
{
background-color:#383838;
}

select {
    width: 100%;
    padding: 16px 20px;
    border: none;
    border-radius: 4px;
    background-color: dimgray;
    color:white;
}

.frm
{
background:#E8E8E8;
border-radius:7px;
padding:20px;
margin-left: 70px;
margin-right: 70px;
margin-bottom: 50px;
border: solid silver 3px;
}
</style>
<body>

<!-- Navbar -->
<div class="top">
  <div class="bar red card-2 left-align large">
    <a href="home.php" class="bar-item button hide-small padding-large hover-white">HOME</a>
    <a href="donate.php" class="bar-item button hide-small padding-large hover-white">DONATE</a>
    <a href="accept.php" class="bar-item button padding-large white">ISSUE</a>
    <a href="search.php" class="bar-item button hide-small padding-large hover-white">CHECK AVAILABILITY</a>
    <a href="camplist.php" class="bar-item button hide-small padding-large hover-white">BRANCHES</a>
    <a href="admin.php" class="bar-item button hide-small padding-large hover-white" style="float:right">ADMIN</a>
 </div>
</div>

<body>

<?php
$connect=mysqli_connect("localhost","root","","bloodbank");
 
if($connect==false)
{
    die("ERROR: Failed to Connect".mysqli_connect_error());
}
// define variables and set to empty values

$nameErr = $mailErr = $rgenderErr =$rbloodtypeErr= $mobilnoErr=$cityErr="";
$name = $mail = $rgender =$rbloodtype=$mobilno=$city=$submit= "";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = ($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["mail"])) {
    $mailErr = "Email is required";
  } else {
    $mail = ($_POST["mail"]);
    // check if e-mail address is well-formed
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      $mailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["rgender"])) 
  {
    $rgenderErr = "Gender is required";
  } 
  else {
    $rgender = ($_POST["rgender"]);
  }
if(empty($_POST["rbloodtype"]))
{
    $rbloodtypeErr = "BloodType is required";
}
else {
    $rbloodtype = ($_POST["rbloodtype"]);
  }
  if(empty($_POST["mobilno"]))
{
    $mobilnoErr = "Mobile no. is required";
}
else {
    $mobilno = ($_POST["mobilno"]);
  }
if(empty($_POST["city"]))
{
    $cityErr = "City is required";
}
else {
    $city = ($_POST["city"]);
  }
$organ=$_POST["organ"];

  $sql="INSERT INTO acceptor(name,mail,rgender,rbloodtype,mobilno,city,organ) VALUES ('$name','$mail','$rgender','$rbloodtype','$mobilno','$city','$organ')";

if(!mysqli_query($connect,$sql))
{

    die('ERROR: Request Not Added.' .mysqli_error($connect));
}
else
{
    echo "REQUEST ADDED!";
}

$result=mysqli_query($connect,$sql);
$count=mysqli_num_rows($result);
if($count==1)
{
header("location: acceptt.php");
}
}

mysqli_close($connect);
?>

<br><br><br><br>
    <h2 style="text-align: center"><i class="fa fa-user-plus fa-fw hover-text-black xxlarge "></i> REQUEST FOR BLOOD<br>
    </h2>
  <br>
  <div class="frm">
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" placeholder="Your name...">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="mail" placeholder="Your Email Address...">
  <span class="error">* <?php echo $mailErr;?></span>
  <br><br>
  <label for="rgender">Gender:</label><br><br>
<input type="radio" name="rgender" value="Male">Male
<input type="radio" name="rgender" value="Female">Female<br><br>
  <span class="error">* <?php echo $rgenderErr;?></span>
  <br><br>
  <label for="rbloodtype">Requested book Type</label><br>
<select id="rbloodtype" name="rbloodtype">
<option selected disabled hidden style='display: none' value=''></option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
<option value="E">E</option>
<option value="F">F</option>
<option value="G">G</option>
<option value="H">H</option>
</select>
<span class="error">* <?php echo $rbloodtypeErr;?></span>
<br><br>

  Mobile No.: <input type="number" name="mobilno" placeholder="Enter Your Contact Number...">
  <span class="error">* <?php echo $mobilnoErr;?></span>
  <br><br>

<label for="city">City</label><br>
<select id="city" name="city">
<option selected disabled hidden style='display: none' value=''></option>
<option value="BANGALORE">BANGALORE</option>
<option value="CHENNAI">CHENNAI</option>
<option value="GOA">GOA</option>
<option value="KOLKATA">KOLKATA</option>
<option value="HYDERABAD">HYDERABAD</option>
<option value="MUMBAI">MUMBAI</option>
<option value="NEW DELHI">NEW DELHI</option>
<option value="NOIDA">NOIDA</option>
<option value="PORT BLAIR">PORT BLAIR</option>
<option value="VISAKHAPATNAM">VISAKHAPATNAM</option>
</select>
<span class="error">* <?php echo $cityErr;?></span>
<br><br>

  <input type="submit" style="font-size:18px;" value="ADD REQUEST">
  
  
</form>
</div>
</body>
</html>
