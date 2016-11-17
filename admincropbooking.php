<?php //admin reject or approval of cropsbooking
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
            <h3 class="p5"><button type="button" onClick="history.back();"><img src="images/download (4).jpg" height="48"/></button></h3>
            <div class="map img-border">
             <img src="images/ser.jpg" width="253" height="187"/>
            </div>
           
          </div>
          <div class="block-6">
            <h3><font color="#FF0000">Crop Booking Approval</font></h3>
            <form id="form1" action="" method="post">
            <?php
			$query=mysql_query("SELECT tblcropbook.`name` , tblcropbook.`status` , tblcrops.`name` , tblcrops.`species`,tblcropbook.cbid
FROM tblcropbook
INNER JOIN tblcrops ON tblcropbook.cid = tblcrops.cid
HAVING STATUS ='waiting'");//select and join two tables tblcrops and tblcropbook
			?>
            <table width="383" border="1">
  <tr><thead>
    <th scope="row"><font color="#FF0000"><i>Name</i></font></th>
    <th><font color="#FF0000"><i>Crop</i></font></th>
    <th><font color="#FF0000"><i>Species</i></font></th>
   
    <th><font color="#FF0000"><i>Verification</i></font></th>
    </thead>
  </tr>
  <?php
  while($r=mysql_fetch_row($query))
  {

   echo "<tr>
    <th scope='row'>$r[0]</th>
    <th>$r[2]</th>
	<th>$r[3]</th>
    <th><a href='admincropbooking1.php?cbid=$r[4]'>Approve</a></th>
   
  </tr>";//fetch details from two tables above merged
  }
  ?>
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
