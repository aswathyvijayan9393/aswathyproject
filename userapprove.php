<?php
include("config.php");//include db connection
session_start();//start session
if(!($_SESSION['adm']))
{
header("location:login.php");//check the loggedin is admin or not
}
$username=$_SESSION['adm'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>AddCrop</title>
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
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 357px;
	top: 203px;
}
</style>
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
          <li class="home-page"><a href="admin.php"><span></span></a></li>
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
            <h3 class="p5"></h3>
            <div class="map img-border">
             <img src="images/gra.jpg" width="270" height="187"/>
            </div>
           
          </div>
          <div class="block-6">
            <h3><font color="#FF0000">User Approval</font></h3>
            <form action="" method="post" enctype="multipart/form-data">
                          <table border="1">
				  <tr><thead>
				  
				  <th>Name</th>
				  <th>Address</th>
				  <th>Contact</th>
				   <th>Email</th>
				   <th>Option</th>
				   </thead></tr>
				  
						 <?php
						 include("config.php");
 $res=mysql_query("select * from tbllogin where status='waiting'");//select users from tbllogin with status waiting
 while($s=mysql_fetch_array($res))
 {
 $ges=mysql_query("select * from tbluser where username='$s[username]'");//select username from register table
 while($r=mysql_fetch_row($ges))
{
   echo"<tr>
   
	<td>$r[2]</td>

	<td>$r[6]</td>
	
	<td>$r[7]</td>
	<td>$r[8]</td>
	<td><a href='userapproval.php?ID=$r[0]'>Approval</a>|<a href='userreject.php?ID=$r[0]'>Reject</a></td>
	
	</tr>";
	}
	}
				 
				  ?>
				  </table></form>
          
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>

</body>
</html>
