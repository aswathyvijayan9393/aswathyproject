<!-----------------user view research institute------------->
<?php
include("config.php");
session_start();
if(!($_SESSION['usr']))
{
header("location:login.php");
}
$username=$_SESSION['usr'];
$vtb=mysql_query("select *from tbluser where username='$username'");
$r=mysql_fetch_array($vtb);
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
     <h1><a href="index.html"><img src="images/hai.png" alt="" width="940" height="95" > </a></h1>
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
          <h3 class="p5"><button type="button" onClick="history.back();"><img src="images/download (4).jpg" height="48"/></button></h3>
            <div class="map img-border">
             <img src="images/res.jpg" width="300" height="200"/>
            </div>
          <h3><font color="#9966CC">Features Available:</font></h3>
            <ul class="list-1">
           <li><a href="userprofile.php"><font color="#CC0066"><b>Profile Updation</b></font></a></li>
             <li><a href="usercrops.php"><font color="#CC0066"><b>Crop Details</b></font></a></li>
              <li><a href="usercropbooking.php"><font color="#CC0066"><b>Crop Booking</b></font></a></li>
              <li><a href="usercultivation.php"><font color="#CC0066"><b>Cultivation Methods</b></font></a></li>
              <li><a href="viewcropapprove.php"><font color="#CC0066"><b>View Crop ApproveDetails</b></font></a></li>
              <li><a href="viewloanapprove.php"><font color="#CC0066"><b>View loan ApproveDetails</b></font></a></li>
             
              <li><a href="userfertilizer.php"><font color="#CC0066"><b>Fertilizers</b></font></a></li>
              <li><a href="userpesticide.php"><font color="#CC0066"><b>Pesticides</b></font></a></li>
              
              <li><a href="userloan.php"><font color="#CC0066"><b>Gramin Bank Loan</b></font></a></li>
              <li><a href="userresearch.php"><font color="#CC0066"><b>Research Institute</b></font></a></li>
			  <li><a href="userevent.php"><font color="#CC0066"><b>News and Events</b></font></a></li>
             
              <li><a href="userseason.php"><font color="#CC0066"><b>Season Based Cultivation</b></font></a></li>
              <li><a href="usermsg.php"><font color="#CC0066"><b>Queries</b></font></a></li>
              <li><a href="userinbox12.php"><font color="#CC0066"><b>Inbox</b></font></a></li>
                </ul>
           
          
            
           
          </div>
          <div class="block-6">
            <h3><font color="#FF0000">Research Institutes</font></h3>
            <form id="form1" action="" method="post">
            <?php
			$query=mysql_query("select *from tblresearch");//select research institutes from tblresearch
			?>
            <table width="383" border="1">
  <tr><thead>
    <th scope="row"><font color="#FF0000"><i>Name</i></font></th>
    <th><font color="#FF0000"><i>View Details</i></font></th>
    </thead>
  </tr>
  <?php
  while($r=mysql_fetch_row($query))
  {

   echo "<tr>
    <th scope='row'>$r[1]</th>
    <th><a href='userresearch1.php?rid=$r[0]'>View Details</a></th>
  </tr>";//fetch and print research details from tblresearch 
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
<!--==============================footer=================================-->
<footer>
  <p>© 2016 White Oval EduSolution</p>
  <p>Powered by White Oval Technologies</p>
</footer>
</body>
</html>
