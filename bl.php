<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
$sn="localhost";
$un="root";
$pw="";
$db="project";
$conn=new mysqli($sn,$un,$pw,$db);
mysqli_select_db($conn,$db);
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
echo "connected <br>";

$na= $_POST['txtna'];
$em= $_POST['txtem'];
$ci= $_POST['txtci'];
$co= $_POST['txtco'];
$msj= $_POST['txtmsg'];
$_SESSION['id']=$na;


$qry="INSERT INTO contact(name,mail,city,country,msg) VALUES('$na','$em','$ci','$co','$msj')";
$con=mysqli_query($conn,$qry);
if(!$con)
{
printf("query failed %s\n",$mysqli->error);
}
else
{
echo "requst received";
header ("LOCATION:acknowledgement.php");

}
?>

</body>
</html>