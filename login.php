<!------------login page------------>
<?php
include("config.php");
if(isset($_POST['login']))
{
$username=$_POST['username'];
$password=$_POST['password'];
$vtb=mysql_query ("select *from tbllogin where username='$username' and password='$password' and status='approve'");

$urow=mysql_fetch_array($vtb);
$u=$urow['type'];
$id=$urow['username'];
if($u=="admin") //admin login
{
session_start();
$_SESSION['adm']=$username;
header("location:admin.php");
}
else if($u=="user") //user login
{
session_start();
$_SESSION['usr']=$username;
header("location:userhome.php");
}

else if($u=="tech") //staff login
{
session_start();
$_SESSION['staf']=$username;
header("location:staffhome.php");

}

else
{
echo"<script>alert('invalid user')</script>"; //invalid login
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.x.js"></script>
<script>
$(document).ready(function(){				   	
	$('.slider')._TMS({
		show:0,
		pauseOnHover:true,
		prevBu:false,
		nextBu:false,
		playBu:false,
		duration:1000,
		preset:'fade',
		pagination:true,
		pagNums:false,
		slideshow:7000,
		numStatus:true,
		banners:'fromRight',
		waitBannerAnimation:false,
		progressBar:false
	})		
});
</script>
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
          <li class="home-page current"><a href="index.php"><span></span></a></li>
<?php 
				session_start();
				if (!(isset($_SESSION['adm'])) and !(isset($_SESSION['usr'])) and !(isset($_SESSION['staf'])))
				{
					echo '<li ><a href="index.php">Login</a></li>'; //go to the login page
				}
				else
				{ echo '<li><a href="logout.php">LOGOUT</a></li>'; //logout and go to the home page
				}
			?>
          <li><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          
          <li><a href="contacts.php">Contacts</a></li>
		  
        </ul>
        
        <div class="clear"></div>
      </div>
    </nav>
  </header>
  <!--==============================content================================-->
  <section id="content">
    <div id="slide" class="box-shadow">
      <div class="slider">
        <ul class="items">
          <li><img src="images/ba.jpg" alt="" width="940" height="393"/>
            <div class="banner">Make ur harvest <font color="#FF0000">stand out</font> from the rest..&nbsp;</div>
          </li>
          <li><img src="images/nq.jpg" alt="" width="940" height="393"/>
            <div class="banner">We assist in all areas of the farming..&nbsp;</div>
          </li>
          <li><img src="images/pla.jpg" alt="" width="940" height="393" />
            <div class="banner">We Craft <font color="green">Practical</font> Solutions&nbsp;</div>
          </li>
        </ul>
      </div>
    </div>
    <div class="container_12">
      <div class="grid_12">
        <div class="pad-0 border-1">
          <h2 class="top-1 p0"><font color="#FF0000">We Provide...Ur Best Results....</font></h2>
          <p class="p2">We provides useful tools, information and resources to help for moderen and scentific farming. From simply offering ideas and guidance, to comprehensive event planning and management, our office is here to support the diverse needs of those coordinating in all steps of farming.</p>
        </div>
        <div class="wrap block-1 pad-1">
          <div>
            <h3><a href="usercrops.php">Crop Details</a></h3>
            <img src="images/aw.jpg" height="154" width="270" alt="" class="img-border">
            <p>Farming is the Prime Occupation in India in spite
of this, today the people involved in farming belongs to the
lower class and is in deep poverty.The Advanced techniques
and the Automated machines which are leading the world to
new heights. </p>
          </div>
          <div>
            <h3>News and Events</h3>
            <img src="images/aw1.jpg" alt="" width="270" height="154" class="img-border">
            <p>   <marquee behavior="scroll" direction="up" height="150" scrollamount="2" scrolldelay="10" onMouseOver="this.stop()" onMouseOut="this.start()"
>
   <?php 
      // include('config.php');
		$sql1=mysql_query("SELECT * FROM tblevents  ORDER BY eid asc")or die(mysql_error());
		 while($sql2=mysql_fetch_array($sql1)){
			 echo "<p><font color='green'>--></font><font color='red'>".$sql2['details']."</font><br/></p>";
			 
		}
		    
   ?>  
   </marquee>
        </p>
             </div>
          <div class="last">
            <h3>Login</h3>
            <form id="form1" action="" method="post">
    
      <table width="200" height="138" border="0">
  <tr>
    <th height="39" scope="row">Username</th>
    <td><input name="username" type="text" ></td>
    
  </tr>
  <tr>
    <th scope="row">Password</th>
    <td><input name="password" type="password" ></td>
  </tr>
  
  <tr>
    
    <td colspan="2"><div align="center">
     <div class="btns"><a href="#" class="button"> <input type="submit" value="login" name="login"/>
     </a></div>
    </div></td>
  </tr>
  <tr>
    
    <td colspan="2"><div align="center">
       <a href="userregister.php" class="button">New Registration</a>
    </div></td>
  </tr>
</table>

    
  </form>
          <!--<img src="images/hj1.jpg" width="270" height="154" alt="" class="img-border">
            <p>Buis dolore te feugait nulla facilisi lorem ipsum dolor siamet consectetuer adipiscing elit, sed diam nonummy.</p>
            <a href="#" class="button">More</a>--> </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
    <div class="aside">
      <div class="container_12">
        <div class="grid_12">
          <div class="pad-2 block-2 wrap">
            <div>
              <h3 class="p3">Complete Guidance</h3>
              <p class="p4">We aim to be the No.1 link between all farmers and technology
Assure the best commitment and price in the market.To form an active partnership with all our clients and dealers and to set forth innovative remedies in order to increase productivity and minimize risks
Be innovative and successful in all we do to help you GROW.In addition, Raven is introducing their new AccuFlow HP+ system, which includes the Vortex cooler and a dynamically controlled pump for even greater capacity </p>
              </div>
            <div class="last">
              <h3 class="p3"><a href="userseason.php">Season based Cultivations</a></h3>
              <p class="p4">Sioux Falls, SD (February 4, 2014) –Raven Industries (NASDAQ: RAVN) Applied Technology Division is excited to introduce the revolutionary AccuFlow™ Vortex system, the newest and most accurate NH3 delivery system in an industry-leading lineup of application controls. The AccuFlow Vortex is a first-of-its-kind anhydrous ammonia application system that has increased capacity within a single cooler, which maximizes applicator time and creates a smaller footprint on the toolbar. </p>
             </div>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </section>
</div>

</body>
</html>
