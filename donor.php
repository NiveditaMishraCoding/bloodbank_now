<?php
$connect=mysqli_connect("localhost","root","","bloodbank");
 
if($connect==false)
{
	die("ERROR: Failed to Connect".mysqli_connect_error());
}

$fname=$_POST['fname'];
if(!preg_match("/^[a-zA-Z]*$/",$fname))
{
	die('Only letters and whitespaces are allowed in your name');
}
$email=$_POST['email'];
if (!filter_var($email,FILTER_VALIDATE_EMAIL)) 
{
  die('Invalid Email Format!');
}
$gender=$_POST['gender'];
$age=$_POST['age'];
$weight=$_POST['weight'];
$bloodtype=$_POST['bloodtype'];
$mobno=$_POST['mobno'];
$city=$_POST['city'];

if(empty($fname))
{
	die('You forgot to enter your name!');
}
if(empty($email))
{
	die('You forgot to enter your email!');
}
if(empty($gender))
{
	die('You forgot to enter your gender!');
}
if(empty($age))
{
	die('You forgot to enter your age!');
}
if(empty($weight))
{
	die('You forgot to enter your weight!');
}
if(empty($bloodtype))
{
	die('You forgot to enter your blood type!');
}
if(empty($mobno))
{
	die('You forgot to enter your mobile no.!');
}
if(empty($fname))
{
	die('You forgot to enter your city!');
}

$sql="INSERT INTO donor(fname,email,gender,age,weight,bloodtype,mobno,city) VALUES ('$fname','$email','$gender','$age','$weight','$bloodtype','$mobno','$city')";

if(!mysqli_query($connect,$sql))
{
	die('ERROR: Donor Not Added.' .mysqli_error($connect));
}
else
{
	echo "ERROR: Donor Not Added." .mysqli_error($connect);
}
mysqli_close($connect);
?>

<!DOCTYPE html>
<html>
<title>DONOR ADDED</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="fa.css">
<style>
body {
   margin:0;
   padding:0;
  }
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;background: #f44336; }
</style>
 <div class="display-middle" style="white-space:nowrap;">
    <span class="center padding-large black xlarge wide animate-opacity">DONOR RECORD ADDED.</span>
  </div>
<a href="donate.php" class="button black padding-large large margin-top">Go Back</button>
</html>
