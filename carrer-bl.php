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
$db="project";
$conn=new mysqli("localhost","root","",$db);
mysqli_select_db($conn,$db);

$file_get = $_FILES['cv']['name'];
$temp = $_FILES['cv']['tmp_name'];
$_SESSION['id']=$email;
$name=$_POST['txtname'];
$email=$_POST['txtmail'];
$phone=$_POST['txtphone'];
$msg=$_POST['txtmsg'];

$file_to_saved = $file_get; //Documents folder, should exist in       your host in there you're going to save the file just uploaded
move_uploaded_file($temp, $file_to_saved);

echo $file_to_saved;

$insert_img = "INSERT INTO career (name,email,phone,cv,message) values  ('$name','$email','$phone','$file_to_saved','$msg')";
$con=mysqli_query($conn,$insert_img);
if ($con) {
# code...
header("LOCATION:acknowledgement.php");
}
else{
 echo "There is something wrong with this code. Eff!";
}



?>

</body>
</html>
