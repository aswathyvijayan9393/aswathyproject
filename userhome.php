<!------------user home---------------->
<?php
include("config.php");
session_start();
if(!($_SESSION['usr']))
{
header("location:index.php");
}
$username=$_SESSION['usr'];
$vtb=mysql_query("select *from tbluser where username='$username'");
$r=mysql_fetch_array($vtb);
?><!DOCTYPE html>
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
<body>
<div class="main">
  <!--==============================header=================================-->
  <header>
   <h1><img src="images/hai.png" alt="" width="940" height="95" > </a></h1>
    <div class="clear"></div>
    <nav class="box-shadow">
      <div>
        <ul class="menu">
          <li class="home-page"><a href="userhome.php"><span></span></a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          
          <li><a href="contacts.php">Contacts</a></li>
		  
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
            <h3><font color="#9966CC">Features Available:</font></h3>
            <ul class="list-1">
            <li><a href="userprofile.php"><font color="#CC0066"><b>Profile Updation</b></font></a></li>
             <li><a href="usercrops.php"><font color="#CC0066"><b>Available Crop Details</b></font></a></li>
              <li><a href="usercropbooking.php"><font color="#CC0066"><b>Crop Booking</b></font></a></li>
             <!-- <li><a href="usercultivation.php"><font color="#CC0066"><b>Cultivation Methods</b></font></a></li>-->
              <li><a href="viewcropapprove.php"><font color="#CC0066"><b>View Crop ApproveDetails</b></font></a></li>
              <li><a href="viewloanapprove.php"><font color="#CC0066"><b>View loan ApproveDetails</b></font></a></li>
            
             
              <li><a href="userfertilizer.php"><font color="#CC0066"><b>Fertilizers</b></font></a></li>
              <li><a href="userpesticide.php"><font color="#CC0066"><b>Pesticides</b></font></a></li>
               <li><a href="usercropdisease.php"><font color="#CC0066"><b>Crop diseases</b></font></a></li>
              
             <li><a href="userloan1.php"><font color="#CC0066"><b>Gramin Bank Loan</b></font></a></li>
              <li><a href="userresearch.php"><font color="#CC0066"><b>Research Institute</b></font></a></li>
			  <li><a href="userevent.php"><font color="#CC0066"><b>News and Events</b></font></a></li>
             
              <li><a href="userseason.php"><font color="#CC0066"><b>Season Based Cultivation</b></font></a></li>
              <li><a href="usermsg.php"><font color="#CC0066"><b>Queries</b></font></a></li>
              <li><a href="userinbox12.php"><font color="#CC0066"><b>Inbox</b></font></a></li>
             <li> <font size="+2"><font color="#3333CC">Kissan credit card Application form<br/></font></font><a href="images/pr.doc"><img src="images/download.jpg" width="131" height="70"></a></li>
            </ul>
          </div>
          <div class="block-6">
            <h3 class="p6"><font color="#378E2B">Welcome <?php echo $username; ?>...!!</font></h3>
           <div class="wrap"> <img src="upload/<?php echo $r[1] ?>" alt="" class="img-border img-indent-2" width="232" height="208">
              <div class="extra-wrap">
              <h3 class="p6"><font color="#9966CC"><u>News and events...!!</u></font></h3>
                <p><marquee behavior="scroll" direction="up" height="150" scrollamount="2" scrolldelay="10" onMouseOver="this.stop()" onMouseOut="this.start()">
   <?php 
      // include('config.php');
		$sql1=mysql_query("SELECT * FROM tblevents  ORDER BY eid asc")or die(mysql_error());
		 while($sql2=mysql_fetch_array($sql1)){
			 echo "<p><font color='green'>--></font><font color='green'>".$sql2['details']."</font><br/></p>";
			 
		}
		    
   ?>  
   </marquee>
        </p>
            
                <p class="p6">
</p>
              </div>
              
              <p class="p1"> <form action="" method="post" enctype="multipart/form-data">
			  <table width="449" height="182" border="0">
  <tr>
    <th scope="row">Name</th>
    <td><?php echo $r['name']; ?></td>
  </tr>
  <tr>
    <th scope="row">Address</th>
    <td><?php echo $r['address']; ?></td>
  </tr>
  <tr>
    <th scope="row">Contact No.</th>
    <td><?php echo $r['contact']; ?></td>
  </tr>
  <tr>
    <th scope="row">Email_ID</th>
    <td><?php echo $r['email']; ?></td>
  </tr>

  
</table></p></form>
              </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="aside">
      <div class="container_12">
        <div class="grid_12">
          <div class="pad-2 wrap">
           <marquee onMouseOver="this.stop()" onMouseOut="this.stop()"><font color="#009F00" size="+4" face="Lucida Handwriting">Green Earth......Green Revolution....</font></marquee>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </section>
</div>
<!--==============================footer=================================-->

</body>
</html>