
<!DOCTYPE html>
<html>
<title>REQUEST LIST</title>
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
</style>
<body>
	<br><br>
    <span class="center padding-large black xlarge wide animate-opacity">LIST OF REQUESTS</span>
    <br><br>
</body>
</html>

<?php
$connect=mysqli_connect("localhost","root","","bloodbank");
 
if($connect==false)
{
	die("ERROR: Failed to Connect".mysqli_connect_error());
}
$result = mysqli_query($connect,"SELECT * FROM acceptor"); // selecting data through mysql_query()
echo '<table border=1px>';  // opening table tag
echo'<th>NAME</th><th>EMAIL</th><th>GENDER</th><th>BLOODTYPE</th><th>CONTACT</th><th>CITY</th><th>ORGAN</th>'; //table headers

while($data = mysqli_fetch_array($result))
{
// we are running a while loop to print all the rows in a table
echo'<tr>'; // printing table row
echo '<td>'.$data['name'].'</td><td>'.$data['mail'].'</td><td>'.$data['rgender'].'</td><td>'.$data['rbloodtype'].'</td><td>'.$data['mobilno'].'</td><td>'.$data['city'].'</td><td>'.$data['organ'].'</td>';
echo'</tr>'; // closing table row
}

echo '</table>';  //closing table tag

mysqli_close($connect);
?>