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
<title>Feedback</title>
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
             <img src="images/inbox.jpg" width="253" height="187"/>
            </div>
           
          </div>
          <div class="block-6">
           
           <h2>Inbox</h2>
          <p><form action="" method="post">
   <?php
  $viewid=$_REQUEST['ID'];
  $vtb=mysql_query("select * from message where ID='$viewid' ");//select feedback from table message
  $r=mysql_fetch_row($vtb);
  ?>
  
     <form action="" method="post">
     <table width="287" border="0">
  <tr>
  <th width="126"></th>
    <th width="151" scope="row"><font color="#0000CC"><?php echo $r[1]."'s Comment"; ?></font></th>
    </tr>
  
  <tr>
    <th scope="row">Feedback</th>
    <td><?php echo $r[2]; ?></td>
  </tr>
  <tr>
    <th scope="row">Reply</th>
    <td><textarea name="reply" cols="20" rows="5"></textarea></td>
  </tr>
  <tr><td colspan="2"><input name="sent" type="submit" value="Sent" /></td></tr>
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
<?php
if(isset($_POST['sent']))
{
	$reply=$_POST['reply'];
	$upd=mysql_query("update message set reply='$reply' where ID='$viewid'  ");//give reply and updated in message table 
if($upd)
{
	echo "<script>alert('Sucessfully Sent');window.location='admininbox.php';</script>";
}
else
{
	echo mysql_error();
}
}
?>