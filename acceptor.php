<?php
$connect=mysqli_connect("localhost","root","","bloodbank");
 
if($connect==false)
{
    die("ERROR: Failed to Connect".mysqli_connect_error());
}


$name=$_POST['name'];
$mail=$_POST['mail'];
$rgender=$_POST['rgender'];
$rbloodtype=$_POST['rbloodtype'];
$mobilno=$_POST['mobilno'];
$city=$_POST['city'];

$sql="INSERT INTO acceptor(name,mail,rgender,rbloodtype,mobilno,city) VALUES ('$name','$mail','$rgender','$rbloodtype','$mobilno','$city')";
if(mysqli_query($connect,$sql))
{
	
}
else
{
	echo "ERROR: Request Not Added." .mysqli_error($connect);
}
mysqli_close($connect);
?>
<!DOCTYPE html>
<html>
<title>REQUEST ADDED</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="fa.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;background: #f44336; }
</style>
 <div class="display-middle" style="white-space:nowrap;">
    <span class="center padding-large black xlarge wide animate-opacity">REQUEST ADDED.</span>
  </div>
<a href="accept.php" class="button black padding-large large margin-top">Go Back</button>
</html>