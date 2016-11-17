<!--add season based crop details-->
<?php
include("config.php");//include db connection
session_start();//start session
if(!($_SESSION['staf']))
{
header("location:login.php");//check the loggedin is admin or not
}
$username=$_SESSION['staf'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin|events</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <!--==============================header=================================-->
  <header>
    <h1><img src="images/hai.png" alt="" width="940" height="95" > </a></h1>
    <div class="form-search">
      
    </div>
    <div class="clear"></div>
    <nav class="box-shadow">
      <div>
         <ul class="menu">
          <li class="home-page"><a href="index.html"><span></span></a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          
          <li><a href="contacts.php">Contacts</a></li>
		  <li><a href="feedback.php">Feedback</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
        
        <div class="clear"></div>
      </div>
    </nav>
  </header>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_12">
        <div class="wrap pad-3">
          <div class="block-5">
            <h3 class="p5"><button type="button" onClick="history.back();"><img src="images/download (4).jpg" height="48"/></button></h3>
            <div class="map img-border">
             <img src="images/sew.jpg" width="270" height="187"/>
            </div>
           
          </div>
          <div class="block-6">
            <h3><font color="#FF0000">Add Season Cultivation</font></h3>
            <form id="form1" action="" method="post" enctype="multipart/form-data">
     
            <table width="477" height="478" border="0">
            <tr>
    <th height="49" scope="row">Season_Name</th>
    <td><input name="name" type="text" required ></td>
  </tr>
  <tr>
    <th height="49" scope="row">Sowing_Season</th>
    <td><input name="sseason" type="text" required ></td>
  </tr>
  <tr>
    <th scope="row" height="49">Harvesting_Season</th>
    <td><input name="hseason" type="text" required ></td>
  </tr>
  <tr>
    <th scope="row" height="49">Crop</th>
    <td><input name="crop" type="text" required ></td>
  </tr>
  <tr>
  <td colspan="2"><a href="#" class="btns"><div align="center">
    <input name="register" type="submit" value="Add Details">
  </div></a></td>
  </tr>
</table>

            </form>
           
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>

</body>
</html>
<?php
if(isset($_POST['register']))
{
	$name=$_POST['name'];
	$sseason=$_POST['sseason'];
	$hseason=$_POST['hseason'];
	$crop=$_POST['crop'];
	
	$ins=mysql_query("insert into tblseason(name,sseason,hseason,crop) values('$name','$sseason','$hseason','$crop')");//insert cultivation season into tblseason 
	
	if($ins)
	{
		echo "<script>alert('Sucessfully Added')</script>";
	}
	else
	{
		echo mysql_error();
	}
}
?>