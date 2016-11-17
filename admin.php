<?php //admin home
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
<title>Admin</title>
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
          <li class="home-page"><a href="admin.php"><span></span></a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          
          <li><a href="contacts.php">Contacts</a></li>
		  <li><a href="adminview.php">Feedback</a></li>
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
            <h3><font color="#FF0000">Functionalities:</font></h3><!--  functionalities  -->
            <ul class="list-1">
             
              <li><a href="admincropbooking.php"><font color="#0000FF"><b>Crop Booking Approval</b></font></a></li>
               <li><a href="userapprove.php"><font color="#0000FF" ><b>User Approval</b></font></a></li>
            
             <li><a href="adminloan.php"><font color="#0000FF" ><b>Loan Approval</b></font></a></li>
            
            
              
              <li><a href="adminevents.php"><font color="#0000FF" ><b>News and Events</b></font></a></li>
              <li><a href="admincrops.php"><font color="#0000FF" ><b>Add crops</b></font></a></li>                
			  <li><a href="admininbox.php"><font color="#0000FF" ><b>Inbox</b></font></a></li>
              <li><a href="addstaff.php"><font color="#0000FF" ><b>Add staff</b></font></a></li>
			 <li><a href="cropbookview.php"><font color="#0000FF" ><b>View cropbook</b></font></a></li>
              <li><a href="loanview.php"><font color="#0000FF" ><b>View Loanapprove</b></font></a></li>
			 
</ul>
          </div>
          <div class="block-6">
            <h3 class="p6"><font color="#0000FF">Welcome Admin</font></h3>
            <div class="wrap"> <img src="images/admin2.jpg" alt="" class="img-border img-indent-2" width="270" height="239"><!-- to display image-->
              <div class="extra-wrap">
                <p align="justify"><a href="#" class="link"><strong><i>A plant is like a self-willed man, out of whom we can obtain all which we desire, if we will only treat him his own way.</i></strong></a></p>
                
              </div>
             
               </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="aside">
      
    </div>
  </section>
</div>
</body>
</html>
</html>
