<!----------user profile--------------->
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
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <script>
 $(document).ready(function() {
 
 $('.hide').hide(); //hides all the hide links on page load
 
 $('a.show').each(function() { //running iterator function
 var thisLink = $(this);
 $(this).click(function() { // Checks if any show link is clicked
 show(thisLink) // Calling the show function & passing the selector value
 });
 });
 
$('a.hide').each(function() { //running iterator function
 var thisLink = $(this);
 $(this).click(function() { // Checks if any hide link is clicked
 hide(thisLink) // Calling the hide function & passing the selector value
 });
 });
 
 });
 
function show(callingLink) {
 callingLink.hide(); //hides the element where click was received
 callingLink.next().show(); //displays the next element that in our case is hide link
 callingLink.next().next().slideToggle('slow'); //toggles the next of next element that is details div
 }
 
function hide(callingLink) {
 callingLink.hide(); //hides the element where click was received
 callingLink.prev().show(); //displays the previous element that in our case is show link
 callingLink.next().slideToggle('slow'); //again toggles the next element that is details div to hide it
 }
 
</script>

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
            <h3><font color="#FF0000">Security Settings:</font></h3>
             <div>
 <a class="hide" href="#"> <b>Hide</b> </a>
 <div class="details" style="display: none">
 <p>

 </p>
 </div>
 </div>
 
<div>
 <a class="show" href="#" style="border:solid;border-color:#030;font-size:16px; background-color:#F00;color:white;"> <b>Change Password</b> </a>
 <a class="hide" href="#"><b> Hide</b> </a>
 <div class="details" style="display: none">
 <p> <form action="" method="post"><table width="200" border="0">
  <tr>
    
    <td><input name="pass" type="password" placeholder="New Password"></td>
  </tr>
  <tr>
   <tr>
    
    <td><input name="pass" type="password" placeholder="Conform New Password"></td>
  </tr>
  <tr>
   
    <td><input name="po" type="submit" value="update"></td>
  </tr>
</table>
</form>
<?php
if(isset($_POST['po']))
{
	$pass=$_POST['pass'];
	$ins=mysql_query("update tbluser set password='$pass' where username='$username'");//update tbluser 
	$ins1=mysql_query("update tbllogin set password='$pass' where username='$username'");//update tbllogin
				   if($ins>0)
					{
						echo "<script>alert('Successfully updated')</script>";
						 
					}

else
{
echo mysql_error();
}
}
?> </p>
 </div>
 </div>
            
          </div>
          <div class="block-6">
            <h3 class="p6"><font color="#378E2B">Welcome <?php echo $username; ?>...</font></h3>
            <form id="form1" action="" method="post" enctype="multipart/form-data"><div class="wrap"> <img src="upload/<?php echo $r[1] ?>" alt="" class="img-border img-indent-2" width="232" height="208">
              <div class="extra-wrap">
                <p><a href="#" class="link"><strong>A dry March, a wet April and a cool May fill barn and cellar and bring much hay.</strong></a></p>
                <p class="p6">
</p>
              </div>
              <p class="p1"><table width="449" height="371" border="0">
  <tr>
    <th height="47" scope="row">Name</th>
    <td><input name="name" type="text" value="<?php echo $r['name']; ?>"><br></td>
  </tr>
  <tr>
    <th height="184" scope="row">Address</th>
    <td><textarea name="address" cols="" rows=""><?php echo $r['address']; ?></textarea><br></td>
  </tr>
  <tr>
    <th scope="row">Contact No.</th>
    <td><input name="contact" type="text" value="<?php echo $r['contact']; ?>"></td>
  </tr>
  <tr>
    <th scope="row">Email_ID</th>
    <td><input name="email" type="text" value="<?php echo $r['email']; ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input name="submit" type="submit" value="Update" style="border:solid;border-color:#999;font-size:16px; background-color:#000;color:white;">
    </div></td></tr>
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
<footer>
  <p>© 2016 White Oval EduSolution</p>
  <p>Powered by White Oval Technologies</p>
</footer>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	
	
	$address=$_POST['address'];
	
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$up=mysql_query("update tbluser set name='$name',address='$address',contact='$contact',email='$email' where username='$username'");//update tbluser and update details
	
	if($up>0)
	{
		echo "<script>alert('update sucessfully')</script>";
	}
	else
	{
		echo mysql_error();
	}
	
}
?>