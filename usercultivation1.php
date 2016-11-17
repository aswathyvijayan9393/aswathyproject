<?php
include("config.php");
session_start();
$username=$_SESSION['usr'];
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
            <h3 class="p5">Ancient Vs Modern</h3>
            <div class="map img-border">
            <img src="images/cu.jpg" width="269" height="190"/>
            </div>
           
          </div>
          <div class="block-6">
            <h3><font color="#FF0000">Cultivation Methods</font></h3>
               <form id="form1" action="" method="post" enctype="multipart/form-data">
               <?php
			   $viewid=$_REQUEST['cmid'];
			  // echo $viewid;
			   $sql=mysql_query("select *from  tblcultivation where cmid='$viewid'");
			   $r=mysql_fetch_array($sql);
			   ?>
            <table width="477" height="478" border="0">
            <tr>
    <th></th>
    <td colspan="2"><img src="upload/<?php echo $r['photo'] ?>" height="193"/></td>
  </tr>
  <tr>
    <th height="49" scope="row">Cultivation_Method</th>
    <td><input name="name" type="text" value="<?php echo $r['name'] ?>" readonly ></td>
  </tr>
   <tr>
    <th height="49" scope="row">Crop</th>
    <td><input name="crop" type="text" value="<?php echo $r['crop'] ?>" readonly ></td>
  </tr>
  <tr>
    <th scope="row" height="49">Details</th>
    <td><textarea name="details" cols="" rows="" readonly><?php echo $r['details'] ?></textarea></td>
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
