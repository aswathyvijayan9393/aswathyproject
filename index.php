<!------index page---------->
<?php 
include("config.php"); // Login page 
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
  
    <h1><img src="images/hai.png" alt="" width="944" height="95" ></h1>
   
    <div class="clear" ></div>
    <nav class="box-shadow" >
      <div>
        <ul class="menu">
          <li><a href="index.php"><span>Home</span></a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
                   
          <li><a href="contacts.php">Contacts</a></li>
		   <!--<li><a href="stfd.php">Staffdetails</a></li>-->
          
           <!--<li><a href="feedback.php">Feedback</a></li>-->
        
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
          <!--<li><img src="images/agro1.jpg" alt="" width="940" height="393"/>
            <div class="banner">Make your harvest <font color="#FF0000">stand out</font> from the rest..&nbsp;</div>
          </li>-->
          <li><img src="images/1.jpg" alt="" width="940" height="393"/>
            <div class="banner">We assist in all areas of the farming..&nbsp;</div>
          </li>
          <li><img src="images/pla.jpg" alt="" width="940" height="393" />
            <div class="banner">We Craft <font color="green">Practical</font> Solutions&nbsp;</div>
          </li>
        </ul>
      </div>
    </div>
    <div class="container_12" align="center">
      <div class="grid_12" style="width:95%;margin-left:120px;">
     
        <div class="wrap block-1 pad-1" style="margin-left:55px">
          <div>
            <!--<h3>Crop Details</h3>-->
            <img src="images/aw.jpg" height="154" width="270" alt="" class="img-border">
            <p align="justify">A crop is any cultivated plant, fungus, or alga that is harvested for food, clothing, livestock fodder, biofuel, medicine, or other uses. In contrast, animals that are raised by humans are called livestock, except those that are kept as pets.  </p>
          </div>
          <div>
            <h3>News and Events</h3>
            
            <img src="images/aw1.jpg" alt="" width="294" height="154" class="img-border">
            <p><marquee behavior="scroll" direction="up" height="150" scrollamount="2" scrolldelay="10" onMouseOver="this.stop()" onMouseOut="this.start()">
   <?php 
      // include('config.php');
		$sql1=mysql_query("SELECT * FROM tblevents  ORDER BY eid asc")or die(mysql_error());
		 while($sql2=mysql_fetch_array($sql1)){
			 echo "<p><font color='green'>--></font><font color='green'>".$sql2['details']."</font><br/></p>"; //fetch events
			 
		}
		    
   ?>  
   </marquee>
        </p>
             </div>
          <div class="last" style="background-color:#0C3;margin-left:60px">
            <h3 style="background-color:#FFF;text-align:center;">Login</h3>
            <form id="form1" action="" method="post">
    
      <table width="200" height="138" border="0">
  <tr>
    <td><label>Username</label></td>
    <td><input name="username" type="text" required></td>
    
  </tr>
  <tr>
    <td>Password</td>
    <td><input name="password" type="password" required></td>
  </tr>
  
  <tr>
    
    <td colspan="2"><div align="center">
   <a class="button" style="background-color:#000"> <input type="submit" value="login" name="login" /></a>
    </div>
    </td>
  </tr>
  <tr>
    
    <td colspan="2"><div align="center">
       <a href="userregister.php" class="button" style="background-color:#000">New Registration</a>
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
    <div class="aside" style="margin-left:150px;width:75%;">
      <div class="container_12">
        <div class="grid_12">
          <div class="pad-2 block-2 wrap">
            <div>
              <h3><font color="#CC6633">പോഷകത്തോട്ടം വീട്ടിലും വിദ്യാലയത്തിലും</font></h3>
              <p align="justify"><font color="#CC66CC">വീട്ടിലായാലും വിദ്യാലയത്തിലായാലും വിവിധ തരം പച്ചക്കറികള് വള൪ത്തുന്ന ഒരു പോഷകത്തോട്ടം അനിവാര്യമാണ്. രാസകീടനാശിനികള് പ്രയോഗിച്ചു എന്ന് ഭയപ്പെടുത്തുന്ന ഗുണമേന്മ കുറഞ്ഞ പച്ചക്കറികള് വിപണിണിയില് നിന്ന് വിലകൊടുത്ത് വാങ്ങുന്നതിലും എത്രയോ ഭേദമാണ് പരിമിതമായ അളവിലായാലും സ്വന്തം വീട്ടുപറമ്പിലെ പച്ചക്കറിത്തോട്ടത്തില് നിന്ന് വിളവെടുക്കുന്ന പച്ചക്കറികള്‌  </font> </p>
                 </div>
            <div class="last">
              <h3><font color="#CC6633"> കിഴങ്ങുവ൪ഗങ്ങള് നടാം </font></h3>
              <p align="justify"><font color="#CC66CC">പച്ചക്കറികള് പോലെ കിഴങ്ങുവ൪ഗങ്ങളും ജൈവരീതിയില് വീട്ടുവളപ്പില് അനായാസം കൃഷി ചെയ്യാം.ഒരു പ്രയാസവുമില്ലാതെ സ്ത്രീകള്ക്കും വരെ ഇതില് ഏ൪പ്പെടാം. <br> </font> </p>
             <ol type="1"><li> <a href="kizhangu.php"><u>കിഴങ്ങുവ൪ഗവിളകൃഷിഒറ്റനോട്ടത്തില് </u></a></li>
             <li> <a href="valam.php"><u>വളം </u></a></li>
              <li><a href="nos.php"><u>പ്രധാനനമ്പറുകള്</u></a></li></ol>
              
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
