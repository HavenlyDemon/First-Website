<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="top-nav-style.css">
<title>Untitled Document</title>
<style>
html{
overflow:scroll;
font-size:100%;
}
img{
width:50px;
}
table{
border:1px solid black;
width:90%;
position:absolute;
top:20%;
}
tr:nth-child(even){
background-color:#4acf50;
opacity:0.7;
}
tr:nth-child(odd){
background-color:#ccc;
opacity:0.7;
}
</style>

</head>

<body>
<?php
include 'top-nav.php';
?>
<?php

$db="project";
$conn=new mysqli("localhost","root","",$db);
mysqli_select_db($conn,$db);
$id=$_SESSION['id'];
$qry="select * from career";
$con=mysqli_query($conn,$qry);
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>phone</th><th>Message</th><th>CV</th></tr>";
while($id=mysqli_fetch_array($con))
{

echo "<tr><td>";
echo $id['id'];
echo "</td><td>";
echo $id['name'];
echo "</td><td>";
echo $id['email'];
echo "</td><td>";
echo $id['phone'];
echo "</td><td>";
echo $id['message'];
echo "</td><td>";
$addr=$id['cv'];
echo "<img src='$addr'/>";
echo "</td></tr>";
}

echo "</table>";
?>


</body>
</html>
