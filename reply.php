<?php
  include("config.php");
  session_start();
  $username=$_SESSION['usr'];
  $tb=mysql_query("select *from tbluser where username='$username'");
$rt=mysql_fetch_array($tb);
$d=$rt['name'];
$vtb=mysql_query("select *from message where name='$d' ");
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
    <h1><img src="images/se.jpg" alt="" width="235" height="90" ></a></h1>
    
    <div class="clear"></div>
    <nav class="box-shadow">
      <div>
        <ul class="menu">
           <li class="home-page"><a href="userhome.php"><span></span></a></li>
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
          <h3 class="p5">Inbox!!</h3>
            <div class="map img-border">
             <img src="images/inbox.jpg" alt="" width="270" height="270" >
            </div>
			
            
          </div>
          <div class="block-6">
            <h3>Message Box!!!</h3>
			<form action="" method="post"><table width="790" border="1">
 <p><form action="" method="post">
   <?php
  $viewid=$_REQUEST['ID'];
  $vtb=mysql_query("select * from message where ID='$viewid' ");
  $r=mysql_fetch_row($vtb);
  ?>
<form action="" method="post">
     <table width="287" border="0" style="background-color:#FFFFFF">
  <tr>
  <th width="126">Query</th>
    <th width="151" scope="row"><font color="#0000CC"><?php echo $r[2]; ?></font></th>
    </tr>
  
  <tr>
    <th scope="row">Reply</th>
    <td><?php echo $r[3]; ?></td>
  </tr>
       </form>

  </table></div>
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
