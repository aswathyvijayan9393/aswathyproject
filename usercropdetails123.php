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
            <h3><font color="#9966CC">Features Available:</font></h3>
            <ul class="list-1">
            <li><a href="userprofile.php"><font color="#CC0066"><b>Profile Updation</b></font></a></li>
             <li><a href="usercrops.php"><font color="#CC0066"><b>Crop Details</b></font></a></li>
              <li><a href="usercropbooking.php"><font color="#CC0066"><b>Crop Booking</b></font></a></li>
              <li><a href="usercultivation.php"><font color="#CC0066"><b>Cultivation Methods</b></font></a></li>
             
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
            <h3><font color="#FF0000">Crop Details</font></h3>
               <?php
if(isset($_POST['register']))
{
	$name=$_POST['name'];
	$sql=mysql_query("select *from tblcrops where species='$name'");
	$r=mysql_fetch_array($sql);
	?>
	<table width="325" height="264" border="0">
  <tr>
    <th width="138" height="49" scope="row">Crop_Name</th>
    <td width="52"><?php echo $r['name']; ?></td>
  </tr>
  <tr>
    <th height="47" scope="row">Season</th>
    <td><?php echo $r['season']; ?></td>
  </tr>
  <tr>
    <th height="45" scope="row">Region</th>
    <td><?php echo $r['region']; ?></td>
  </tr>
 <!-- <tr>
    <th height="52" scope="row">Temperature</th>
    <td><?php echo $r['temperature']; ?></td>
  </tr>-->
  <tr>
    <!--<th scope="row">Soil Concentration</th>
    <td><?php echo $r['soil']; ?></td>
  </tr>-->
  <tr>
    <th scope="row">Disease</th>
    <td><?php echo $r['disease']; ?></td>
  </tr>
  <tr>
    <th scope="row">Features</th>
    <td><?php echo $r['feature']; ?></td>
  </tr>
</table>
<?php
}
?>

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
