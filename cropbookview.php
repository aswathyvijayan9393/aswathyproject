<!-----------crop book view---------->
<?php
include("config.php");
session_start();
$username=$_SESSION['usr'];
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
     <h1><img src="images/hai.png" alt="" width="940" height="95" > </a></h1>
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
		  <li class="current"><a href="feedback.php">Feedback</a></li>
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
            <h3 class="p5">Inbox</h3>
            <div class="map img-border">
             <img src="images/inbox.jpg" width="253" height="187"/>
            </div>
           
          </div>
          <div class="block-6">
           
            <form id="form1" action="" method="post">
            <?php
			$query=mysql_query("select *from tblcropbook");
			?>
            <table width="383" border="1">
  <tr>
    <th scope="row"><font color="#FF0000"><i>Name</i></font></th>
    <th><font color="#FF0000"><i>Quantity</i></font></th>
    <th><font color="#FF0000"><i>contactno</i></font></th>
    <th><font color="#FF0000"><i>Cname</i></font></th>
    <th><font color="#FF0000"><i>Status</i></font></th>
    
    
  </tr>
  <?php
  while($r=mysql_fetch_row($query))
  {

   echo "<tr>
    <th scope='row'>$r[2]</th>
    <th>$r[3]</th>
   <th>$r[5]</th>
   <th>$r[7]</th>
   <th>$r[6]</th>
   
   
  </tr>";
  }
  ?>
</table>


            </form>
           <!-- <form id="form" method="post" action="#">
              <fieldset>
                <label>
                  <input type="text" required value="Name" onBlur="if(this.value=='') this.value='Name'" onFocus="if(this.value =='Name' ) this.value=''" name="name">
                </label>
                 <label>
                  <input type="text" required value="Username" onBlur="if(this.value=='') this.value='Username'" onFocus="if(this.value =='Username' ) this.value=''" name="username">
                </label>
                <label>
                  <input type="text" required value="Password" onBlur="if(this.value=='') this.value='Password'" onFocus="if(this.value =='Password' ) this.value=''" name="password">
                </label>
                <label>
                  <input type="text" required value="Gender" onBlur="if(this.value=='') this.value='Gender'" onFocus="if(this.value =='Gender' ) this.value=''" name="gender">
                </label>
                <label>
                  <input type="text" required value="Phone" onBlur="if(this.value=='') this.value='Phone'" onFocus="if(this.value =='Phone' ) this.value=''" name="phone">
                </label>
                <label>
                  <textarea name="address" required onBlur="if(this.value==''){this.value='Address'}" onFocus="if(this.value=='Address'){this.value=''}">Address</textarea>
                </label><br>
                <label>
                  <input type="text" required value="Email" onBlur="if(this.value=='') this.value='Email'" onFocus="if(this.value =='Email' ) this.value=''" name="email">
                </label>
                <label>
                <!--<a href="#" class="button">Clear</a><a href="#" class="button">Send</a><input name="register" type="submit" value="Register">
                </label>
              </fieldset>
            </form>-->
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>

</body>
</html>
