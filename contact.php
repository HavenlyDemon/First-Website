<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" type="text/css" href="top-nav-style.css" />
<link rel="stylesheet" type="text/css" href="bottom-nav-style.css" />

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<style>

html{
font-size:100%;
font-family:"Courier New", Courier, monospace;
}


*{
box-sizing:border-box;
}
body{
overflow:hidden;
}
.main_container{
width:100%;
top:40%;
height:100%;


}
.map{
position:relative;
margin-left:12%;
margin-top:7.5%;

}
.carriers_container{


position:relative;
width:80%;
margin:auto;
text-align:center;
color:#463674;
}

.fields h1{
font-family:Consolas, Courier;
color:#463674;
width:100%;
font-size:100%;
margin:auto;
margin-top:50%;
font-family:Consolas, Courier;
border-bottom:2px solid rgba(197,197,197,0.9);

}
.fields{
background-color:none;
width:10%;
left:30%;
position:absolute;
margin-top:5%;
}
.fields img{
margin-left:35%;
}
.gallery
{
margin-bottom:30%;
}
.caption{
text-align:center;
color:#463674;


}
.details{
color:#ccc;
text-align:center;
font-family:Consolas, Courier;
font-size:12px;
color:#3C1374;

}

.collums{

width:33%;
top:23%;
left:40%;
position:absolute;

border-radius:4px;
padding:2%;

}
.collums h2{
font-family:Consolas, Courier;
color:#463674;
width:85%;
border-bottom:2px solid rgba(197,197,197,0.9);
font-size:14px;
}

.col_gallery{

width:85%;

}
input[type='text']
{
display:block;
width:100%;
padding:2%;
margin-bottom:2%;
border:2px solid rgba(60,19,116,0.7);
border-radius:4px;
}
textarea{
width:100%;
border:2px solid rgba(60,19,116,0.7);
border-radius:4px;

}
input[type='submit']
{
display:block;

padding:2%;
border:2px solid rgba(60,19,116,0.5);
border-radius:4px;
width:30%;
background-color:#663366;
margin-top:2%;
color:white;
}
input[type='submit']:hover{
background-color:rgba(60,19,116,0.5);
border:2px solid rgb(60,19,116);
color:white;
cursor:pointer;
}

.soc_media{
display:block;
width:10%;
background-color:none;

top:13%;
position:absolute;
right:0%;
}
.links{
margin-bottom:-700px;

}
.soc_media img:hover{
padding:10%;
border:2px solid blue;
border-radius:30px;

}

@media only screen and (max-width: 700px){
.collums{
top:0%;
width:30%;

left:40%;
position:absolute;

border-radius:4px;
padding:2%;
}

}
@media only screen and (max-width: 1024px){
.collums{
top:22%;
width:30%;

left:40%;
position:absolute;

border-radius:4px;
padding:2%;
}
p{
font-size:10px;
}
h1,h2,h3{
font-size:20px;
}

input[type='text']
{
display:block;
width:100%;
padding:2%;
margin-bottom:0px;
border:2px solid rgba(60,19,116,0.7);
border-radius:4px;
}

.col_gallery{

width:100%;

}
.main_container{
top:0%;
position:absolute;
}

.soc_media{
display:block;
width:3%;
background-color:none;

top:20%;
position:absolute;
right:0%;
}
.gallery{
margin-top:0%;
}
.fields{
background-color:none;
width:20%;
left:15%;
position:absolute;
margin-top:7%;
}
.fields img{
width:25px;
height:20px;
}

}
@media only screen and (min-width: 1025px){

.collums{
top:15%;
width:30%;

left:40%;
position:absolute;

border-radius:4px;
padding:2%;
}





}
</style>
<body>

<?php
include 'top-nav.php';
?>
<div class="col-12">
<div class="main_container">

<div class="carriers_container">

</div>


<div class="fields">
<h1>Drop us a line to find out more</h1>
<div class="gallery">
<img src="social media icons/228567-contact-communication/png/phone-call-1.png" height="45" width="45" />
<div class="caption">CALL US <br /><span class="details">+123456789<br />-123456789</span></div>
</div>

<div class="gallery">
<img src="social media icons/228567-contact-communication/png/email.png" height="45" width="45" />
<div class="caption">Mail Us <br /><span class="details">AHSANRASUL08@GMAIL.COM</span></div>
</div>

<div class="gallery">
<img src="social media icons/228567-contact-communication/png/speech-bubble-7.png" height="45" width="45" />
<div class="caption">Address <br /><span class="details">Al Asmavi Bldg, Near Tasheel,
Manama Road, Ras Al Khor - 2
PO.Box: 430620, Dubai - U.A.E. </span></div>
</div>



</div>

<div class="collums">
 <h2>contact us</h2>
 <div class="col_gallery">
 <form  id="form1" name="form1" action="bl.php" method="post">

 <input type="text" id="txtna" name="txtna" placeholder="Enter Name" />

<input type="text" id="txtem" name="txtem" placeholder="Enter Email" />
<input type="text" id="txtci" name="txtci" placeholder="Enter City" />
<input type="text" id="txtco" name="txtco" placeholder="Enter Country" />
<textarea rows=10 cols="50" name="txtmsg" id="txtmsg"></textarea>
<input type="submit" value="submit" />
</form>
</div>
<div class="soc_media">
<a href="#" target="_blank"><img src="social media icons/Social Media Icons/PNG/Circle Color/Facebook.png" height="45" width="45" /></a>
 <a href="#" target="_blank"><img src="social media icons/Social Media Icons/PNG/Circle Color/Google+.png" height="45" width="45"  /></a>
 <a href="#" target="_blank"><img src="social media icons/Social Media Icons/PNG/Circle Color/Linkedin.png" height="45" width="45" /></a>
 </div>



</div>

</div>

</div>


<?php 
include 'bottom-nav.php';
?>
</body>
</html>
