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
</style>
<body>
  <br><br>
    <span class="center padding-large black xlarge wide animate-opacity">LIST OF DONORS</span>
    <br><br>
</body>
</html>
<?php 
  if(isset($_POST['submit'])){ 
  if(isset($_GET['go'])){ 
      if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
      $name=$_POST['name']; 
  //connect  to the database 
     $connect=mysqli_connect("localhost","root","","bloodbank");
 
if($connect==false)
{
    die("ERROR: Failed to Connect".mysqli_connect_error());
} 
 //-query  the database table 
      $sql="SELECT fname,bloodtype,mobno,city FROM donor WHERE bloodtype LIKE '".$name."' "; 
  //-run  the query against the mysql query function 
      $result=mysqli_query($connect,$sql); 
  //-create  while loop and loop through result set 
      echo '<table border=1px>'; 
      echo'<th>NAME</th><th>BLOODTYPE</th><th>CONTACT</th><th>CITY</th>';
      while($row=mysqli_fetch_array($result)){ 
          $fname  =$row['fname']; 
          $bloodtype=$row['bloodtype']; 
          $mobno  =$row['mobno']; 
          $city=$row['city']; 
      //-display the result of the array 
  echo'<tr>'; // printing table row
echo '<td>'.$row['fname'].'</td><td>'.$row['bloodtype'].'</td><td>'.$row['mobno'].'</td><td>'.$row['city'].'</td>'; // we are looping all data to be printed till last row in the table
echo'</tr>';
      } 
 } 
      else{ 
  echo  "<p>Please enter a search query</p>"; 
      } 
      } 
      } 
    ?> 