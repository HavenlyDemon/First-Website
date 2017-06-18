<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="view-port" content="width:device-width initial-scale=1" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="top-nav-style.css" />
<link rel="stylesheet" type="text/css" href="bottom-nav-style.css" />
<title>Untitled Document</title>
<style>
*{
box-sizing:border-box;
}

html{
font-size:100%;
font-family:"Courier New", Courier, monospace;
}

body{
background-color:white;
overflow:hidden;
}


.maincontent{
margin-top:5%;
padding:0px;
background-color:red;


}

.verticle-nav{
margin-top:20%;
width:45%;
margin-right:15%;
float:right;
padding:0px;

}
.verticle-nav ul{
list-style-type:none;
margin-right:0;
margin-left:0;
width:100%;
padding:0px;
}
.verticle-nav li{
margin-top:2%;

border-bottom:2px solid rgba(197,197,197,0.9);
font-size:18px;
text-decoration:none;
min-width:100%;
padding:2%;
}
.verticle-nav li a{
text-decoration:none;
font-family:Consolas, Courier;
font-size:20px;
color:#463674;
}
.verticle-nav li:hover a ,li:hover{
background-color:#463674;
color:white;
text-decoration:none;

}

.texture{
width:100%;
text-align:justify;
padding:0px;
margin:0px;

color:black;

}
.texture p{
background-color:rgba(66,28,82,0.1);
width:90%;
}

@media only screen and (max-device-width: 480px) {
html{
font-size:10px;
}
p{

font-size:10px;

}



</style>
</head>




<body>

<?php
include 'top-nav.php';
?>


<div class="maincontent">
<div class="col-5" >
<!--verticle navigation-->
<div class="verticle-nav">
<ul>
<li><a href="aboutus.php">About us</a></li>
<li><a href="message.php">Message From us</a></li>
<li><a href="mission.php">Mission And Vission</a></li>
</ul>
</div>

</div>
</div>

<div class="col-7" >
<div class="texture">
<h1 style="border-bottom:2px solid rgba(197,197,197,0.9)">Our Mission</h1>
<p>Our aim to provide quality workmanship in a safe environment ensuring efficiency and complete customer satisfaction.</p>
<h1 style="border-bottom:2px solid rgba(197,197,197,0.9)">Our Vission</h1>
<p>To be recognized as one of the most admired companies in our industry because of our commitments to clients, employees and business partners.</p>
<h2 style="border-bottom:2px solid rgba(197,197,197,0.9)">Our Core Values</h2>
Our Core Values

<h4 style="border-bottom:2px solid rgba(197,197,197,0.9)">Client Focus:</h4> 
<p>We partner with our clients and align our collective goals in order to exceed expectations</p>
<h4 style="border-bottom:2px solid rgba(197,197,197,0.9)">Integrity:</h4> 
<p>We conduct ourselves with the highest levels of trust, honesty and ethical standards</p>

</div>

</div>
</div>



<?php
include 'bottom-nav.php';
?>
</body>
</html>
