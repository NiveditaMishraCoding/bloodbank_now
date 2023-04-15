<!DOCTYPE html>
<html>
<title>BLOOD BANK MANAGEMENT</title>
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
    <a href="welcome.php" class="bar-item button hide-small padding-large hover-white">GO BACK</a>
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
$cityErr = $addressErr = $contactErr="";
$city = $address = $contact= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
  if (empty($_POST["city"])) 
  {
    $cityErr = "City name is required";
  } 
  else {
    $city = ($_POST["city"]);
  }
if(empty($_POST["address"]))
{
    $addressErr = "Address is required";
}
else {
    $address = ($_POST["address"]);
  }
if(empty($_POST["contact"]))
{
    $contactErr = "Contact is required";
}
else {
    $contact = ($_POST["contact"]);
  }


  $sql="INSERT INTO camps(city,address,contact) VALUES ('$city','$address','$contact')";
  if(!mysqli_query($connect,$sql))
{
    die('ERROR: Camp Not Added.' .mysqli_error($connect));
}
else
{
    echo "CAMP ADDED!";
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
    <h2 style="text-align: center"><i class="fa fa-tint fa-fw hover-text-black xxlarge "></i> ADD A CAMP<br>
    </h2>
  <br>
  <div class="frm">
<form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>

<label for="city">City</label><br><br>
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
<label for="address" >Address</label>
<input type="text" id="address" name="address" placeholder="Address of the Camp...">
<span class="error">* <?php echo $addressErr;?></span>
<br><br>
<label for="contact">Contact</label>
<input type="number" id="contact" name="contact" placeholder="Enter Camp's Contact Number..."> 
<span class="error">* <?php echo $contactErr;?></span>
<br><br>
<input type="submit" style="font-size:18px;" value="ADD CAMP">

</form>
</div>
</body>
</html>