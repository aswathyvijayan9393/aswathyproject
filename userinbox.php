<?php
  include("config.php");
  session_start();
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
			
		  </div>
		  <div>
		  <form action="" method="post"><table width="790" border="1">
  <tr>
    <th width="114" height="53" scope="col">fid</th>
    <th width="168" scope="col">email</th>
    <th width="117" scope="col">comment</th>
    <th width="115" scope="col">type</th>
    <th width="158" scope="col">status</th>
    <th width="78" scope="col">reply</th>
  </tr>
  <tr>
    <td>1</td>
    <td>manuvarmame@gmail.com</td>
    <td>Thank You for the kind service</td>
    <td>user</td>
    <td>1</td>
    <td>please login into your account</td>
  </tr>
  <tr>
    <td>2</td>
    <td>sreejith@yahoo.com</td>
    <td>Good service</td>
    <td>user</td>
    <td>0</td>
    <td>Thanks for your feedback</td>
  </tr>
  <tr>
    <td>3</td>
    <td>rahulraj@hotmail.com</td>
    <td>Its a good guide for farming</td>
    <td>user</td>
    <td>0</td>
    <td>Thanks for your feedback</td>
  </tr>
</table>

		  <?php
  if(mysql_num_rows($vtb)>1)
  {
	 while($r=mysql_fetch_row($vtb))
	 {
		echo "<table><tr><td><input name='check' type='checkbox' value='ok' /><b>$r[3]</b> ---&nbsp;&nbsp;<a href='userreply.php?fid=$r[0]'><font color='black'>Admin's reply.click here to view</font></a></td></tr><tr><td>-------------------------------------------------------------------------------------------------------</td></tr></table>";
	 }}
	 else
	 {
		 echo "<b><font size='+2'>No Mail in your inbox</font></b>";
	 }
	 ?></form>
		  </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>

</body>
</html>
