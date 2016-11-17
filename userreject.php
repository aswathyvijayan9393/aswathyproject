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
             <img src="images/gra.jpg" width="253" height="187"/>
            </div>
           
          </div>
          <div class="block-6">
            <h3><font color="#FF0000">User Approval</font></h3>
            <form action="" method="post" enctype="multipart/form-data">
            <?php
			   $viewid=$_REQUEST['ID'];
			   $Result=mysql_query("select * from tbluser where uid='$viewid'");//select each user from register
		  $s=mysql_fetch_array($Result);
		 $Rows=mysql_query("select status from tbllogin where username='$s[username]'");//selecting status from login table for approval
	  $g=mysql_fetch_array($Rows);
		    ?>
			<div class="rtable">
<!--<div class="rowtab"><div class="rowcell"><img src="upload/" width=100" height="100"/></div></div>
-->							
<div class="rowtab"><div class="rowcello">Name:<input type="text" name="er" readonly value="<?php echo $s['name']; ?>"></div></div>
<div class="rowtab"><div class="rowcello"><input name="reject" type="submit" value="reject" /></div></div>
</div>
			 <?php
 if(isset($_POST['reject']))
					{
                        $upd = mysql_query("delete from  tbluser WHERE username='$s[username]'");//update status in login
                   $upd1=mysql_query("delete from tbllogin where username='$s[username]'");
				    if($upd)
					{
					echo "<script>alert('rejected Successfully');window.location='admin.php';</script>";
					}
					else 
					{
					echo "mysql_error()";
					}
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
<!--==============================footer=================================-->
<footer>
  <p>© 2015 White Oval EduSolution</p>
  <p>Powered by White Oval Technologies</p>
</footer>
</body>
</html>
