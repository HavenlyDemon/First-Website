<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="top-nav-style.css" />
<link rel="stylesheet" type="text/css" href="bottom-nav-style.css" />
<style>

*{
box-sizing:border-box;
}
html{
font-size:100%;
font-family:"Courier New", Courier, monospace;
}


.imgcontainer{
margin-top:7%;
width:90%;
margin:auto;
}
.imgcontainer h1{
margin-top:8%;
margin-left:6%;
border-bottom:2px solid rgba(197,197,197,0.9);
width:90%;
padding-left:5%;
padding-bottom:1%;
color:#463674;
font-family:Consolas, Courier;
}
.galery{

display:inline-block;

margin-top:0%;
margin-left:2%;

}
.galery:hover{
border:1px solid #ccc;

}
.galery img{
max-width:100%;
max-height:100%;
padding:3%;
}
.caption{
text-align:center;
font-family:Consolas, Courier;
color:#463674;
}

@media only screen and (max-width: 1024px){
html{
font-size:12px;
}
.galery{

display:inline-block;
width:20%;
margin-top:0%;
margin-left:2%;

}

.imgcontainer h1{
margin-top:30%;
margin-left:6%;
border-bottom:2px solid rgba(197,197,197,0.9);
width:90%;
padding-left:5%;
padding-bottom:1%;
color:#463674;
font-family:Consolas, Courier;
}



}
@media only screen and (min-width: 1024px){

.galery{

display:inline-block;
width:20%;
margin-top:0%;
margin-left:2%;

}

.imgcontainer h1{
margin-top:12%;
margin-left:6%;
border-bottom:2px solid rgba(197,197,197,0.9);
width:90%;
padding-left:5%;
padding-bottom:1%;
color:#463674;
font-family:Consolas, Courier;
}




}

</style>


</head>
<body>
<?php
include 'top-nav.php';
?>
<div class="col-12">

<div class="imgcontainer">
<h1>Transportation</h1>
<form method="post" action="bss.php">
<div class="galery">
<a href="#"><img src="transortation/10_ton_truck.png"  /></a>
<div class="caption" id="txtid">10 TON TRUCK</div>
</div>
<div class="galery">
<a href="#"><img src="transortation/12-Ton-Truck.jpg"  /></a>
<div class="caption" id="txtid">12 TON TRUCK</div>
</div>
<div class="galery">
<a href="#"><img src="transortation/20_Feet_Jingle_Truck_2.jpg"  /></a>
<div class="caption" id="txtid">20 FEET JINGLE TRUCK</div>
</div>
<div class="galery">
<a href="#"><img src="transortation/40_Feet_Jingle_Truck_2.png"  /></a>
<div class="caption" id="txtid">40 FEET JINGLE TRUCK</div>
</div>
<div class="galery">
<a href="#"><img src="transortation/20_feet_skeleton_trailors.jpg"  /></a>
<div class="caption" id="txtid">20 FEET SKELETON TRAILORS</div>
</div>
<div class="galery">
<a href="#"><img src="transortation/40_feet_flat_bed_Trailors_1.jpg"  /></a>
<div class="caption" id="txtid">40 FEET FLAT BED TRAILORS</div>
</div>
<div class="galery">
<a href="#"><img src="transortation/20-feet-skeletion-trailors.jpg"  /></a>
<div class="caption" id="txtid">20 FEET SKELETON TRAILORS</div>
</div>
<div class="galery">
<a href="#"><img src="heavy equipments/bulldozer.png"  /></a>
<div class="caption" id="txtid">10 Ton Truck</div>
</div>
</form>

</div>

<?php
include 'bottom-nav.php';
?>
</div>

</body>
</html>
