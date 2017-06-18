<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="view-port" content="width:device-width initial-scale=1" /> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="top-nav-style.css" />
<link rel="stylesheet" type="text/css" href="bottom-nav-style.css" />
<title>Untitled Document</title>
<style>
html{
font-size:100%;
font-family:"Courier New", Courier, monospace;
}

*{
box-sizing:border-box;
}
body{
background-color:white;
overflow:hidden;
}


.maincontent{
margin-top:5%;
padding:0px;
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

@media only screen and (max-width: 1024px){
.texture p{
font-size:10px;
}
.maincontent{
margin-top:20%;
}

}
@media only screen and (min-width: 1025px)
{
.texture p{
font-size:15px;
width:80%;
}
.maincontent{
margin-top:12%;
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
<h1 style="border-bottom:2px solid rgba(197,197,197,0.9)">About us</h1>
<p>At this point in time when my dear homeland – Pakistan – is passing through critical path in history, the future of Pakistan staunchly depends on how my country men and women handle the present stormy phase and lead her to a bright future. Over these last ten years, NEW JAHANI GROUP (NJG): a construction, logistics and transportation company, has made big strides to catch up with vibrant and fast moving market opportunities. We have had gains and losses. Gains in the form of many contracts awarded to us by the US Army Corps of Engineers – Afghanistan Engineering District (USACE – AED) and other international agencies. The challenging environment in Afghanistan that NJG is operating has always been rewarding in a sense that our project teams, engineers, skilled and unskilled personnel shape up in the face of difficulties faced during performance. Geographically difficult locations, climatic problems (variation of weather between -24 degree C and up to 50 degree C), absence of proper road and lack of access to reach life support amenities to some of our project sites are some of these challenges that NJG and other partners have been struggling to overcome. I believe this has provided huge employment opportunity to the peopls. I would like to express my gratitude and appreciation to our clients who continued to repose their trust in NJG and extended all out support and cooperation during our operation.
</p>
</div>

</div>
</div>



<?php
include 'bottom-nav.php';
?>
</body>
</html>
