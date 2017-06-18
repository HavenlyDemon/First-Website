<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Untitled Document</title>
<style>
img{
width:50px;
}
table{
border:1px solid black;
width:100%;

}
tr:nth-child(even){
background-color:#4acf50;
opacity:0.7;
}
tr:nth-child(odd){
background-color:#ccc;
opacity:0.7;
}
td{
padding:1%;
}
</style>

</head>

<body>
<?php

$db="project";
$conn=new mysqli("localhost","root","",$db);
mysqli_select_db($conn,$db);
$id=$_SESSION['id'];
$qry="select * from contact";
$con=mysqli_query($conn,$qry);
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Emai<th>City</th><th>Country</th><th>Message</th></tr>";
while($id=mysqli_fetch_array($con))
{

echo "<tr><td>";
echo $id['id'];
echo "</td><td>";
echo $id['name'];
echo "</td><td>";
echo $id['mail'];
echo "</td><td>";
echo $id['city'];
echo "</td><td>";
echo $id['country'];
echo "</td><td>";
echo $id['msg'];
}

echo "</table>";
?>


</body>
</html>
