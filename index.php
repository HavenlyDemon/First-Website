<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width:device-width initial-scale=1.0" />

<title>Untitled Document</title>

<style>
html{
font-size:100%;
font-family:"Courier New", Courier, monospace;
}


*{
box-sizing:border-box;
}
.col-1{
width:8.333%;

}
.col-2{
width:16.66%;
}
.col-3{
width:25%;


}
.col-4{
width:33.33%;
}
.col-5{
width:41.66%;
}
.col-6{
width:49.99%;
}
.col-7{
width:58.331%;
}
.col-8{
width:66.66%;
}
.col-9{
width:75%;

}
.col-10{
width:83.33%;
}

.col-11{
width:91.63%;
}
.col-12{
width:100%;
background-color:#ccc;
}
[class*="col-"]{
float:left;
}
.row::after{
content:"";
display:table;
overflow:auto;
}

/*nav style*/
.nav ul{
list-style-type:none;
position:absolute;
width:100%;
top:4%;
background-color:#463674;
z-index:2;
left:0px;
}
.nav li{
float:left;
}
.nav li a,.menu-btn{
color:white;
text-align:center;
text-decoration:none;
padding:14px 16px;
font-size:100%;
display:block;
position:relative;
margin-left:1%;}
.nav li a:hover,.menu:hover .menu-btn{
background-color:rgba(60,19,116,0.7);

}
li.menu{
display:inline-block;
}
.nav .dropcontent{
display:none;
padding:14px 16px;
background-color:#463674;
position:absolute;
z-index:3;
}
.nav .dropconent a{
text-decoration:none;
color:white;
text-align:center;
display:block;
position:absolute;
margin-top:20px;
}
.nav .dropcontent a:hover{
background-color:color:#463674;
}
.menu:hover .dropcontent{
display:block;
}
/*slide start*/

.myslide{
display: none;
padding:0px;
margin:0px;
width:100%;

position:absolute;
top:0%;
left:0px;
}
.fade{
animation-name:fade;
animation-duration:1.5s;
}

@keyframes fade{
from {opacity:0.6}
to {opacity:1}
}
.row2{
	position:absolute;
	margin-top:50%;
	top: 10px;
	left:0;
	margin-bottom:0;
}

.side1{
width:100%;
margin:auto;
background-color:#ccc;
padding:5%;
padding-left:20%;
text-align:justify;
border-right:2px solid rgba(330,330,330,0.4);

}
.side1 p{
background-color:rgba(66,28,82,0.1);
font-size:100%;
}

.side2{
padding:5%;
margin-top:5%;
}


.galery_container{

width:90%;
margin:auto;
padding:2%;
border-top:2px solid rgba(330,330,330,0.4);
}
.galery{
width:30%;
display:inline-block;
border:2px solid rgba(330,330,330,0.4);
border-radius:4px;
margin-left:2.8%;
margin-bottom:1%;
top:5%;
padding:0px;
background-color:rgba(66,28,82,0.2);
}
@media only screen and (max-width: 1024px){
.galery{
width:25%;
}
html p{
font-size:10px;
}
p{
font-size:10px;
}

h1,h2,h3{
font-size:15px;
}
}
@media only screen and (min-width: 1025px){

.galery{
width:28%;
float:left;
margin-left:3%;
}
}


.caption{
background-color:#463674;
border-radius:3px;
}
.caption h3{
top:0px;
padding:3%;
margin:0px;
color:white;
}
.btn{
margin-bottom:4%;
margin-right:4%;
float:right;
padding:2.5%;
border:2px solid rgba(211,211,211,0.4);
background-color:#463674;
border-radius:4px;
}
.btn a{


color:white;

margin-bottom:2%;
text-decoration:none;
}
.btn a:hover{
opacity:0.7;
}
/*bottom nav*/

.links{
height:3%;
position:absolute;
bottom:-3%;
width:100%;
left:0px;
background-color:#463674;
padding:0px;
}

.links ul{
background-color:#463674;
height:40px;
list-style-type:none;

margin-bottom:0px;
width:100%;

}

.links li{
float:left;
text-decoration:none;
font-size:18px;

}
/*paragraph*/
.links li a{
color:white;
text-decoration:none;
margin-left:20px;
}
.links li a:hover{
background-color:rgba(60,19,116,0.7);

}
.links h1{
text-decoration:none;
margin:auto;
}





</style>
</head>

<body>

<!--top Navigation-->


<div class="col-12">

<div class="nav">

<ul>
<img src="logo.png" width="100px" height="5%" style=" float:right; margin-right:15%" />
<li class="menu"><a href="index.php" class="menu-btn">Home</a></li>
<li class="menu"><a href="aboutus.php" class="menu-btn">About Us</a></li>

<li class="menu"><a href="#" class="menu-btn">Services</a>
<div class="dropcontent">
<a href="heavy.php">Heavy Equipment</a>
<a href="transport.php">Transportation</a>
</div>
</li>
<li class="menu"><a href="carrer.php" class="menu-btn">Careers</a></li>
<li class="menu"><a href="contact.php" class="menu-btn">Contact Us</a></li>

</ul>

</div>
<!--end of nav-->

<div class="myslide fade">

<img src="slider_home_pics/Jahani_Banner.jpg" width="100%" height="30%" />
</div>

<div class="myslide fade">
<img src="slider_home_pics/Jahani_Banner_2.jpg" width="100%" height="30%" />
</div>

<div class="myslide fade">
<img src="slider_home_pics/transport_-_Copy.jpg" width="100%" height="30%" />
</div>

<!--end of slider-->
</div>



<div class="row2">

<div class="col-6">
<div class="side1">
<h1 style="text-decoration:none; background-color:#463674; color:white;border:2px solid rgba(211,211,211,0.7); border-radius:5px;">Services</h1>
<img src="pics/Transportation.jpg" style=" width:100%;" />

<h1 style="background-color:#463674; border:2px solid rgba(211,211,211,0.7); color:white; border-radius:5px;">Welcome to New Jahani</h1>
<p>New Jahani Group (NJG) is serving the various services in a mutual business manner by the past 08 years to US Military forces, UN Agencies, NATO, Canadians forces, ISAF and other multiple organizations, as a registered contractor, managing various projects. NJG is now managing business operations in Kandahar, Kabul, Helmand, Nimroz, Heraat, Zabul, Ghazni and Urozgan Province. NJG had a well experienced structure of managing various projects for different organizations in a very satisfying manner, we guarantee you to shove our company in a convenient way to serve your organization in an enhanced method while managing contracts and projects.NJG is equipped with all the required capabilities needed for running an efficient and effective.</p> </div>

</div>
<div class="col-6">

<div class="side2">
<img src="pics/app-heavyequipment_1.png" width="100%" height="100%" />
</div>

<div class="side2">
<img src="pics/Expo2020DubaiNewLogo.jpg" width="100%" height="100%" />
</div>
</div>


<div class="col-12">

<div class="galery_container">

<div class="galery">
<div class="caption"><h3>Earth Work Mechines</h3></div>
<img src="pics/transport_vehicles-services.jpg" width="100%" />
<div class="story"><p>We offer a wide range of modern equipments for hire. With an in-house workshop facility & a team of mechanics for all kind of service and repairs, we ensure that the downtime is kept to a minimum during unexpected breakdowns.</p></div>
<div class="btn"><a href="#">Read More</a></div>
</div>

<div class="galery">
<div class="caption"><h3>Truck Tripers Tailers</h3></div>
<img src="pics/Equipments-services.jpg" width="100%" />
<div class="story"><p>We offer a wide range of modern machines for hire. With an in-house workshop facility & a team of mechanics for all kind of service and repairs, we ensure that the downtime is kept<br /><br /></p></div>
<div class="btn"><a href="#">Read More</a></div>

</div>

<div class="galery">
<div class="caption"><h3>Dieasel Genrators</h3></div>
<img src="pics/generator-service.jpg" width="100%" />
<div class="story"><p>At AL SHOLA, we understand that losing power means losing business. Securing your critical worksite/facility with appropriate standby and back-up power units can ensure your business stays up and running during unexpected blackouts</p></div>
<div class="btn"><a href="#">Read More</a></div>

</div>

<div class="galery">
<div class="caption"><h3>Light Towers</h3></div>
<img src="pics/lighting-towers.jpg" width="100%" />
<div class="story"><p>We have mobile light towers with winch or hydraulic operated masts. These equipment have masts up to 30 feet, up to 7.5 acres of illumination powered by 4x 1,000 watt metal halide lamps.
</p></div>
<div class="btn"><a href="#">Read More</a></div>

</div>

<div class="galery">
<div class="caption"><h3>Air Compressor</h3></div>
<img src="pics/tranformer.jpg" width="100%" />
<div class="story"><p>We offer Portable Air Compressors in the ranging from Capacity of 200 CFM to 800 CFM.
Following are the various options we have:<br /><br /></p></div>
<div class="btn"><a href="#">Read More</a></div>

</div>

<div class="galery">
<div class="caption"><h3>Air Cooled Chillers</h3></div>
<img src="pics/chiller-services.jpg" width="100%" />
<div class="story"><p>AL SHOLA Offers Air cooled industrial chillers along with the required accessories like Chilled water pump & water hoses] for your specific temporary cooling requirements.</p></div>
<div class="btn"><a href="#">Read More</a></div>

</div>

</div>
</div>







<div class="links">
<ul>
<li class="quickmenu"><a href="#"><img src="social media icons/Social Media Icons/PNG/Square Color/Facebook.png" width="25px" height="25px" /></a></li>
<li class="quickmenu"><a href="#" >  <img src="social media icons/Social Media Icons/PNG/Square Color/Linkedin.png" width="25px" height="25px" /></a></li>

<li class="quickmenu"><a href="terms.php" >  Terms And Conditions   </a></li>
<li class="quickmenu"></li>
</ul>
</div>

</div>







<script>

var index=0;

show();

function show()
{
var i;
var slides=document.getElementsByClassName("myslide");
for(i=0; i < slides.length; i++)
{
slides[i].style.display="none";
}
index++;
if(index > slides.length){index=1;}
slides[index-1].style.display="block";
setTimeout(show, 2000);


}
</script>



</body>
</html>
