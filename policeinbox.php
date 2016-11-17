<?php
  include("config.php");
  session_start();
  $username=$_SESSION['pce'];
  $tb=mysql_query("select *from tblinbox where username='$username'");
$rt=mysql_fetch_array($tb);
$d=$rt['name'];
$vtb=mysql_query("select *from tblfeedback where name='$d' and status=1");
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>IndustrialServices | Products</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css2/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css2/grid.css" type="text/css" media="all">
<link rel="stylesheet" href="css2/style.css" type="text/css" media="all">
<!--[if lt IE 9]><script type="text/javascript" src="js/html5.js"></script><![endif]-->
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:200px;
	height:141px;
	z-index:1;
	left: 582px;
	top: 74px;
}
</style>
</head>
<body>
<!-- START PAGE SOURCE -->
<header>
  <nav>
    <div class="container">
      <div class="wrapper">
         <h1><a href="#"><strong>Cyber </strong>Police</a></h1>
        <ul>
          <li><a href="policehome.php">home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="service.php">Services</a></li>
          <li><a href="contact.php">contacts</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <section class="adv-content">
    <div class="container">
      <ul class="breadcrumbs">
        <li>Inbox</li>
      </ul>
     
    </div>
  </section>
</header>
<section id="content">
  <div class="top">
    <div class="container">
      <div class="clearfix">
        <div class="grid3 first">
          <h2><font color="#0000CC"></font></h2>
         
          <figure><img src="images/in.png" alt="" width="220" height="198"></figure>
        </div>
        <div class="grid9">
          <h2>Inbox</h2>
          <div class="img-box">
         
         <form action="" method="post">
        
  <?php
  if(mysql_num_rows($vtb)>0)
  {
	 while($r=mysql_fetch_row($vtb))
	 {
		echo "<table><tr><td><input name='check' type='checkbox' value='ok' /><b>$r[3]</b> ---&nbsp;&nbsp;<a href='policereply.php?fid=$r[0]'><font color='black'>Admin's reply.click here to view</font></a></td></tr><tr><td>-------------------------------------------------------------------------------------------------------</td></tr></table>";
	 }}
	 else
	 {
		 echo "<b><font size='+2'>No Mail in your inbox</font></b>";
	 }
	 ?>
         </form>
            <p>
        <p>
        
		
      </p>
           
          </div>
          <div class="img-box">
            <figure></figure>
            <p>&nbsp;</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="middle">
    <div class="container">
      <div class="clearfix">
        <div class="grid3 first">
          <h2>&nbsp;</h2>
        </div>
        <div class="grid9">
          <h2>&nbsp;</h2>
          <div class="clearfix">
            <div class="grid3"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom">
    
  </div>
</section>
<footer>
  <div class="footerlink">
    <p class="lf">Copyright &copy; 2014  - All Rights Reserved</p>
    <p class="rf"> by White Oval EduSolutions. </p>
    <div style="clear:both;"></div>
  </div>
</footer>
<!-- END PAGE SOURCE -->
<div align=center>Powered by White Oval Technologies</div></body>
</html>
