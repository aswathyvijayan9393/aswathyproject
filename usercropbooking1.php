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
<script type="text/javascript">
function chk()
{
	var a=document.getElementById("name").value;
	if(a=="")
	{
	document.getElementById("nam").innerHTML="field is empty";	
	}
	else
	{
		document.getElementById("nam").innerHTML="";
	}
}
function chk1()
{
	var b=document.getElementById("username").value;
	if(b=="")
	{
	document.getElementById("usr").innerHTML="Userid must be filled";	
	}
	else
	{
		document.getElementById("usr").innerHTML="";
	}
}
function chk2()
{
	var c=document.getElementById("password").value.length;
	if(c<=6)
	{
		document.getElementById("pass").innerHTML="password too short";
	}
	else
	{
		document.getElementById("pass").innerHTML="";
	}
}
function chk10()
{
	var c=document.getElementById("password").value.length;
	var t=document.getElementById("confirm").value.length;
	if(c!=t)
	{
		document.getElementById("pass1").innerHTML="Password Mismatched";
	}
	else
	{
		document.getElementById("pass1").innerHTML="";
	}
}
function chk3(evt)
{
	var e=event||evt;
	var code=e.which || e.keyCode;
	if(code<48||code>57)
	{
	return false;	
	}
}
function chk5()
{
	var f=document.getElementById("address").value;
	if(f=="")
	{
	document.getElementById("addr").innerHTML="field is empty";	
	}
	else
	{
		document.getElementById("addr").innerHTML="";
	}
}
function chk7()
{
	var x=document.getElementById("email").value;
	var atpos=x.indexOf("@");
	var dotpos=x.lastIndexOf(".");
	if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
	{
		document.getElementById("eml").innerHTML="Invalid E-mail ID";
	}
	else
	{
		document.getElementById("eml").innerHTML="";
	}
}		
function terms()
{
if(document.getElementById('agree').checked)
{
alert('Thank you. Form is ready for approval.');
return true;
}
else
{
alert('Terms rejected. Can not proceed....');
return false;
}
}	
</script>
<script language="Javascript" type="text/javascript">
 
        function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
 
    </script>
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
            <h3 class="p5"> <button type="button" onClick="history.back();"><img src="images/download (4).jpg" height="48"/></button></h3>
            <div class="map img-border">
             <img src="images/ser.jpg" width="272" height="191"/>
            </div>
           
          </div>
          <div class="block-6">
            <h3><font color="#FF0000">Book Crops</font></h3>
               <form id="form1" action="" method="post">
               <?php
			   $viewid=$_REQUEST['cid'];
			   $sql=mysql_query("select *from tblcrops where cid='$viewid'");
			   $r=mysql_fetch_array($sql);
			   ?>
            <table width="477" height="478" border="0">
  <tr>
    <th height="49" scope="row">Crop Name</th>
    <td><input name="name" type="text" value="<?php echo $r['name'] ?>" readonly ></td>
  </tr>
  
  <tr>
    <th height="49" scope="row">Quantity</th>
    <td><input name="qt" type="text" value="" maxlength="2" onKeyPress="return chk3()" required></td>
  </tr>
  <tr>
    <th scope="row" height="49">Name</th>
    <td><input name="username" type="text" value="<?php echo $username; ?>" readonly></td>
  </tr>
  
  
  
   <tr>
    <th scope="row" height="49">Address</th>
    <td><textarea name="address" cols="21" rows="3" required></textarea></td>
	
  </tr>
 <tr>
              <th scope="row">Contact_no.</th>
              <td><label for="contact"></label>
              <input type="text" name="contact" required id="contact" onBlur="chk3()" onKeyPress="return chk3()" maxlength="10"></td>
            </tr>
  <tr>
    <th height="49" scope="row">Species</th>
    <td><input name="species" type="text" value="<?php echo $r['species'] ?>" readonly ></td>
  </tr>
  <tr>
    <th height="49" scope="row">Season</th>
    <td><input name="season" type="text" value="<?php echo $r['season'] ?>" readonly ></td>
  </tr>
   <tr>
    <th height="49" scope="row">Region</th>
    <td><input name="region" type="text" value="<?php echo $r['region'] ?>" readonly ></td>
  </tr>
  
  <tr>
  <td colspan="2"><a href="#" class="btns"><div align="center">
    <input name="register" id="register"type="submit" value="Book Crop">
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
$name=$_POST['name'];
$qty=$_POST['qt'];
$username=$_POST['username'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$spec=$_POST['species'];
$season=$_POST['season'];
$region=$_POST['region'];
$vtb=mysql_query("select *from tblcrops where name='$name'");	
$vt=mysql_fetch_row($vtb);	
$dt=$vt[0];
$result=mysql_query("select * from tblcropbook where name='$username' && cropname='$name'");
$r=mysql_fetch_array($result);
if($r)
{
echo "<script>alert('already booked');window.location='usercropbooking.php';</script>";
}else
{
$ins=mysql_query("insert into tblcropbook(cid,name,quantity,address,contactno,status,cropname,species,season,region) values('$dt','$username','$qty','$address','$contact','waiting','$name','$spec','$season','$region')");
if($ins)
{
	echo "<script>alert('Sucessfully Added'); window.location='usercropbooking.php';</script>";
}
else
{
	echo mysql_error();
}
}
}
?>