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
<title>User|loan</title>
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
          
          <div class="block-6">
            <button type="button" onClick="history.back();"><img src="images/download (4).jpg" height="28"/></button> <h3><font color="#FF0000">Apply for a Gramin Loan</font></h3>
            <form id="form1" action="" method="post" enctype="multipart/form-data">
           <table width="704" height="393" border="0">
  <tr>
    <th>Date:</th>
	 <th><label for="date"></label><input name="ldate" type="date" required></th>
	 <th>Photo<label for="photo"></label><input type="file" name="photo" required></th>
    </tr>
  <tr>
    <th>Full Name</th>
    <th><label for="name"></label>
      <input type="text" name="name" id="name" required></th>
    <th>Occupation<label for="occupation"></label><input name="occupation" type="text" required></th>
    
  </tr>
  <tr>
    <th>Address</th>
    <th><label for="address"></label>
      <textarea name="address" id="address" cols="20" rows="3" required></textarea></th>
    
    <tr>
	 <tr>
              <th scope="row">Pincode</th>
              <td><label for="pin"></label>
              <input type="text" maxlength="6" name="pin" id="pin" onBlur="chk3()" onKeyPress="return chk3()"></td>
            </tr>
    <th>Guardian's Name</th>
    <th><label for="gname"></label>
      <input type="text" name="gname" id="gname" required></th>
    <th>Relation<input name="relation" type="text" required></th>
    
  </tr>
  </tr>
  
   <tr>
              <th scope="row">Contact_no.</th>
              <td><label for="contact"></label>
              <input type="text" name="contact" required id="contact" onBlur="chk3()" onKeyPress="return chk3()" maxlength="10"></td>
            </tr>
			<tr>
              <th scope="row">Loan Reason</th>
              <td><label for="reason"></label>
              <input type="text" name="reason" id="reason" onBlur="chk3()" required></td>
            </tr>
  <tr>
    <th>Gender</th>
    <th><input name="gender" type="radio" value="male" required>Male <input name="gender" type="radio" value="female">Female</th>
    <th>&nbsp;</th>
    
  </tr>
  <tr>
    <th>Place</th>
    <th><input name="place" type="text" required></th>
    <th>&nbsp;</th>
    
  </tr>
   <tr>
              <th scope="row">Account-no:</th>
              <td><label for="Account"></label>
              <input type="text" name="ac" required id="ac" onBlur="chk3()" onKeyPress="return chk3()" maxlength="10"></td>
            </tr>
  <tr>
   
	
    <th>Bank Name<br><input name="bankname" type="text" required></th>
    <th>Place(Bank)<br><input name="bplace" type="text" required></th>
    
  </tr>
  <tr>
    <th>Annual Income</th>
    <th><input name="annual" type="text" maxlength="5" onKeyPress="return chk3()" required></th>
    <th>&nbsp;</th>
    
  </tr>
  <tr>
    <th>Have owned your own Space: <br><input name="space" type="radio" value="yes" required>Yes <input name="space" type="radio" value="no">No </th>
   
    <th>If yes specify:<input name="specify" type="text"></th>
    <th></th>
  </tr>
  <tr><th colspan="3"><input name="submit" type="submit" value="Request"></th></tr>
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
if(isset($_POST['submit']))
{
	$ldate=$_POST['ldate'];
	$name=$_POST['name'];
	$occupation=$_POST['occupation'];
	$address=$_POST['address'];
	$pin=$_POST['pin'];
	$gname=$_POST['gname'];
	$relation=$_POST['relation'];
	$contact=$_POST['contact'];
	$reason=$_POST['reason'];
	$gender=$_POST['gender'];
	$place=$_POST['place'];
	$ac=$_POST['ac'];
	$bankname=$_POST['bankname'];
	$bplace=$_POST['bplace'];
	$annual=$_POST['annual'];
	$space=$_POST['space'];
	$specify=$_POST['specify'];
	$photo=$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],getcwd()."\\upload\\$photo");
$result=mysql_query("select * from tblloan where username='$username'");
   $r=mysql_fetch_array($result);
if($r)
{
echo "<script>alert('user already exists')</script>";
}else
{
	
$ins=mysql_query("insert into tblloan(ldate,photo,name,occupation,address,pin,gname,relation,contact,reason,gender,place,ac,bankname,bplace,annual,space,specify,status,username) values('$ldate','$photo','$name','$occupation','$address','$pin','$gname','$relation','$contact','$reason','$gender','$place','$ac','$bankname','$bplace','$annual','$space','$specify','0','$username')");//insert loan details into tblloan
	if($ins)
	{
		echo "<script>alert('Request Sent Sucessfully')</script>";
	}
	else
	{
		echo mysql_error();
	}
	}
}
?>