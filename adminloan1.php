<?php
include("config.php");
session_start();
if(!($_SESSION['adm']))
{
header("location:login.php");
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
     <h1><img src="images/se.jpg" alt="" width="265" height="110" > </a></h1>
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
            <h3 class="p5">Sucess!!!</h3>
            <div class="map img-border">
             <img src="images/sert.jpg" width="253" height="187"/>
            </div>
           
          </div>
          <div class="block-6">
            <h3><font color="#FF0000">Successfully Approved!!!</font></h3>
            <form id="form1" action="" method="post">
            <?php
			   $viewid=$_REQUEST['loanid'];
			   $sql=mysql_query("select *from tblloan where loanid='$viewid'");
			   $r=mysql_fetch_array($sql);
			   ?>
           <table width="590" height="478" border="0">
  
  <tr>
    <th width="323" height="49" scope="row">Name</th>
    <td width="257"><?php echo $r['name']; ?></td>
  </tr>
  
  
  
   <tr>
    <th scope="row" height="49">Address</th>
    <td><?php echo $r['address']; ?><input name="contact" type="hidden" value="<?php echo $r['contact']; ?>"/></td>
  </tr>
  
  <tr>
    <th height="49" scope="row">Bank_Name</th>
    <td><?php echo $r['bankname']; ?></td>
  </tr>
  <tr>
    <th height="49" scope="row">Account No.</th>
    <td><?php echo $r['ac']; ?></td>
  </tr>
  <tr>
    <th height="49" scope="row">Annual Income</th>
    <td><?php echo $r['annual']; ?></td>
  </tr>
  <tr>
  <td colspan="2"><a href="#" class="btns"><div align="center">
    <input name="register" type="submit" value="Approval">
  </div></a></td>
  </tr>
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
if(isset($_POST['register']))
{
	$contact=$_POST['contact'];
	//echo "<font color='#FFFFFF'>".$contact."</font>";

$ins=mysql_query("update tblloan set status=1 where loanid='$viewid'");
if($ins)
{
	echo "<script>alert('Sucessfully Approved');window.location='adminloan.php';</script>";
	$ch = curl_init();
						$user="prasanth@whiteovaltechnologies.com:wot0011005";
						$receipientno="$contact"; 
						$senderID="TEST SMS";
						+ 
						$msgtxt="Hi, Your Loan is approved.Please contact bank for further details"; 
						curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
						curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt($ch, CURLOPT_POST, 1);
						curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
						$buffer = curl_exec($ch);
						if(empty ($buffer))
						{ echo "buffer is empty "; }
						else
						{ echo $buffer; } 
						curl_close($ch);
}
else
{
	echo mysql_error();
}
}
?>