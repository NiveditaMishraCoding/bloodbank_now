
<!DOCTYPE html>
<html>
<title>DONOR LIST</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="fa.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;background: whitesmoke; }
<style>
body {
   margin:0;
   padding:0;
  }
table {width:100%;}
table, th, td { border: 1px solid silver; border-collapse: collapse;}
th, td {padding: 15px; text-align: left;}
tr:nth-child(even){background-color:#E8E8E8;}
tr:nth-child(odd){background-color:silver;}
tr:hover{background-color:darkgray;}
th{background-color: dimgray; color:white;}
.fa-heartbeat {font-size:180px;}
</style>
<body>
	<div class="top">
  <div class="bar red card-2 left-align large">
    <a href="home.php" class="bar-item button hide-small padding-large hover-white">HOME</a>
    <a href="donate.php" class="bar-item button hide-small padding-large hover-white">DONATE</a>
    <a href="accept.php" class="bar-item button hide-small padding-large hover-white">ISSUE</a>
    <a href="search.php" class="bar-item button hide-small padding-large hover-white">CHECK AVAILABILITY</a>
    <a href="camplist.php" class="bar-item button padding-large white">BRANCH</a>
    <a href="admin.php" class="bar-item button hide-small padding-large hover-white" style="float:right">ADMIN</a>
 </div>
<div>
  <br>
    <span class="center padding-large black xlarge wide animate-opacity">LIST OF BRANCHES</span>
    <br><br>

</body>
</html>



<?php
$connect=mysqli_connect("localhost","root","","bloodbank");
 
if($connect==false)
{
	die("ERROR: Failed to Connect".mysqli_connect_error());
}
$result = mysqli_query($connect,"SELECT * FROM camps"); // selecting data through mysql_query()
echo '<table border=1px>';  // opening table tag
echo'<th>CITY</th><th>ADDRESS</th><th>CONTACT</th>'; //table headers

while($data = mysqli_fetch_array($result))
{
// we are running a while loop to print all the rows in a table
echo'<tr>'; // printing table row
echo '<td>'.$data['city'].'</td><td>'.$data['address'].'</td><td>'.$data['contact'].'</td>';
echo'</tr>'; // closing table row
}

echo '</table>';  //closing table tag
mysqli_close($connect);
?>
