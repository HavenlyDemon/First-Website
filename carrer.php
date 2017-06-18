<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="top-nav-style.css" />
<link rel="stylesheet" type="text/css" href="bottom-nav-style.css" />
<title>Career with New Jahani</title>
<style>
html{
font-size:100%;
font-family:"Courier New", Courier, monospace;
}



.career{
width:30%;
padding:0px;
margin:auto;
margin-top:10%;
}


.career h2{
font-family:Consolas, Courier;
border-bottom:2px solid rgba(197,197,197,0.9);
color:rgb(60,19,116);
font-size:100%;
}



form{
width:90%;
margin:auto;
padding:0;
margin-top:2%;

}

input
{
display:block;

padding:2%;
}
input[type='text']
{
padding:3%;
width:90%;
border:2px solid rgba(60,19,116,0.7);
border-radius:4px;
}
input[type='file']
{
width:50%;
padding:3%;
border:2px solid rgba(60,19,116,0.7);
border-radius:4px;
}
textarea{
width:90%;
border:2px solid rgba(60,19,116,0.7);
border-radius:4px;
padding:5%;

}
input[type='submit']
{
border:2px solid rgba(60,19,116,0.7);
border-radius:4px;
background-color:rgb(60,19,116);
color:white;
width:30%;
margin-top:2%;
}
input[type='submit']:hover{
background-color:rgba(60,19,116,0.5);
cursor:pointer;
}
@media only screen and (max-width: 1024px){


input[type='text']
{
width:80%;
padding:0%;
border:2px solid rgba(60,19,116,0.7);
border-radius:4px;
}
input[type='file']{
width:70%;
}
textarea{
width:90%;
border:2px solid rgba(60,19,116,0.7);
border-radius:4px;
padding:2%;

}
form{
width:90%;
margin:auto;
padding:0;
margin-top:1%;

}
.career{
width:50%;
padding:0px;
margin:auto;
margin-top:15%;
}
}



</style>
</head>

<body>
<?php
include 'top-nav.php';
?>
<div class="col-12">


<div class="career">

<h2>Careers With New Jahani Group L.L.C </h2>
<form method="post" action="carrer-bl.php" enctype="multipart/form-data">
<label>Name<br />

<input type="text" name="txtname" id="txtname" placeholder="Full Name"  />
</label>


<label>Email<br />
<input type="text" name="txtmail" id="txtmail" placeholder="Email Id" />
</label>



<label>Phone<br />
<input type="text" name="txtphone" id="txtphone" placeholder="Phone no." />
</label>



<label>Upload Cv<br />
<input type="file" id="cv" name="cv" />
</label>


<label>Message<br />

<textarea rows="6" cols="20" placeholder="Message" id="txtmsg" name="txtmsg">
</textarea>
</label>
<input type="submit" value="submit" />
<br />

</form>


</div>
</div>



<?php
include 'bottom-nav.php';
?>

</body>
</html>
