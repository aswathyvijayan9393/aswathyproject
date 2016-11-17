<!---------add messages------------->
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
   <h1><a href="index.html"><img src="images/hai.png" alt="" width="940" height="95" > </a></h1>
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
             <button type="button" onClick="history.back();"><img src="images/download (4).jpg" height="28"/></button>
           
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
           <form id="form1" action="" method="post">
           <h2><font color="#33CC99">Ask doubts to Admin</font></h2>
  <table width="200" border="0">
            <tr>
             <td><label for="name">Your Name</label></td>
               <td><input type="text" name="n" id="n" /></td>
            </tr><br/>
            <tr>
              
              <td><label for="query">Query</label></td><td>
                <textarea name="q" id="q" cols="25" rows="5"></textarea> </td></tr><br/>
            <tr>
              <td colspan="2" align="center"><input type="submit" name="s" value="Send" style="border:solid;border-color:#0C9;font-size:16px; background-color:#0FC;color:black;"/></td>
              </tr>
          </table>

</table>
            </form>
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
<footer>
  <p>© 2016 White Oval EduSolution</p>
  <p>Powered by White Oval Technologies</p>
</footer>
</body>
</html><?php
if(isset($_POST['s']))
{
	$name=$_POST['n'];
	$q=$_POST['q'];
	
	$ins=mysql_query("insert into message(name,message,reply,sendto)values('$name','$q','waiting','admin')");//add message into message table
	if($ins)
	{
		echo "<script>alert('Request Sent Sucessfully')</script>";
	}
	else
	{
		echo mysql_error();
	}
}
?>