<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Userhome</title>
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
<div class="main">
  <!--==============================header=================================-->
  <header>
    <h1><img src="images/hai.png" alt="" width="940" height="95" > </a></h1>
    <div class="clear"></div>
    <nav class="box-shadow">
      <div>
        <ul class="menu">
          <li class="home-page"><a href="staffhome.php"><span></span></a></li>
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
  <!------------------------------------------------------------------------------------>
  
  <!-------------------------------------------------------------------------------------->
<body>
 <section id="content">
    <div class="container_12">
      <div class="grid_12">
        <div class="wrap pad-3">
          <div class="block-5">
          

<h3><font color="#9966CC">Features Available:</font></h3>
            <ul class="list-1">
            <li><a href="adminseason.php"><font color="#0000FF" ><b>Add Season</b></font></a></li>
            
              
                <li><a href="admincultivation.php"><font color="#0000FF" ><b>Cultivation Methods</b></font></a></li>
              <li><a href="adminfertilizer.php"><font color="#0000FF" ><b>Fertilizers</b></font></a></li>
              
              <li><a href="adminpesticide.php"><font color="#0000FF" ><b>Pesticides</b></font></a></li>
             
              <li><a href="admindisease.php"><font color="#0000FF" ><b>Crop Diseases</b></font></a></li>
              
</ul>
          </div>
          <div class="block-6">

           <form id="form1" action="" method="post" style=">
            <?php
			$query=mysql_query("select *from tblstaff");//select events from tblstaff
			?>
            <form  action="" method="post" enctype="multipart/form-data">
           <table border="1" align="center">
		   <tr><thead bgcolor="#999999"><th>Photo</th><th>Name</th><th>Address</th><th>Designation</th><th>contactno</th><th>Emailid</th></thead></tr>
 <?php
  while($r=mysql_fetch_row($query))
  {

   echo "<tr>
   <td><img src='upload/$r[1]' width='60' height='70'></td>
    <td>$r[2]</td>
    <td>$r[3]</td>
	<td>$r[4]</td>
    <td>$r[5]</td>
    <td>$r[6]</td>
   
  </tr>";//fetch and echo events from tblevents
  }
  ?>
</table>


            </form>
              </div>
</body>
</html>