<?php
include("config.php");
session_start();
if(!($_SESSION['usr']))
{
header("location:login.php");
}
$username=$_SESSION['usr'];
  $tb=mysql_query("select *from tbluser where username='$username'");
$rt=mysql_fetch_array($tb);
$d=$rt['name'];
$vtb=mysql_query("select *from tblinbox where name='$d' and status=1");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>IDEEEl | Contacts</title>
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
    <div class="clear"></div>
    <nav class="box-shadow">
      <div>
        <ul class="menu">
          <li class="home-page"><a href="index.html"><span></span></a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Contact</a></li>
          <li class="current"><a href="#">Feedback</a></li>
          
        </ul>
        <div class="social-icons"> <span>Follow us:</span> <a href="#" class="icon-3"></a> <a href="#" class="icon-2"></a> <a href="#" class="icon-1"></a> </div>
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
            <h3 class="p5">Inbox!!</h3>
            <div class="map img-border">
             <img src="images/inbox.jpg" alt="" width="270" height="270" >
            </div>
			
            
          </div>
          <div class="block-6">
            <h3>Message Box!!!</h3>
			<form action="" method="post"><table width="790" border="1">
 <p>Inbox</p><form action="" method="post">
  <?php
  $vtb=mysql_query("select * from message where  name='$d'");
  ?>
  
  <?php
	 while($r=mysql_fetch_row($vtb))
	 {
		echo "<table><tr><td><input name='check' type='checkbox' value='ok' /><b>$r[1]</b> ---$r[2]&nbsp;&nbsp;<a href='reply.php?ID=$r[0]'><font color='black'><b>Admin's reply.click here to view</b></font></a></td></tr><tr><td>------------------------------------------------------------------------</td></tr></table>";
	 }
	 ?>          </form>

  
		  </div>
		  <div>
		  
		  </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>

</body>
</html>
