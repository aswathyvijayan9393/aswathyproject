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
          
          <div class="block-6" align="center">
            <button type="button" onClick="history.back();"><img src="images/download (4).jpg" height="28"/></button> <h3><font color="#FF0000">Apply for a Gramin Loan</font></h3>
            <form id="form1" action="" method="post" enctype="multipart/form-data">
           <table width="650" height="688" border="0" style="margin-left:250px">
  <tr>
    <td><label>Date:</label></td>
     <td><input name="ldate" type="text" style="border:none" value="<?php echo date('d/m/y');?>" size="8" maxlength="8" readonly></td>
   </tr>
      <tr>
      <td>
      <label>Photo</label></td><td><label for="photo"></label><input type="file" name="photo" required></td>
	 </tr>
  <tr>
    <td><label>Full Name</label></td>
    <td><label for="name"></label>
      <input type="text" name="name" id="name" required></td>
      </tr>
      <tr>
    <td><label>Occupation</label></td>
    <td><input name="occupation" type="text" required></td>
    
  </tr>
  <tr>
    <td><label>Address</label></td>
    <td><label for="address"></label>
      <textarea name="address" id="address" cols="24" rows="3" required></textarea></td>
  </tr>  
    <tr>
              <td><label>Pincode</label></td>
              <td><label for="pin"></label>
              <input type="text" maxlength="6" name="pin" id="pin" onBlur="chk3()" onKeyPress="return chk3()"></td>
     </tr>
     <tr>
    <td><label>Guardian's Name</label></td>
    <td><label for="gname"></label>
      <input type="text" name="gname" id="gname" required></td>
      </tr>
      <tr>
    <td><label>Relation</label></td>
    <td><input name="relation" type="text" required></td>
    
  </tr>  
   <tr>
              <td>Contact_no.</td>
              <td><label for="contact"></label>
              <input type="text" name="contact" required id="contact" onBlur="chk3()" onKeyPress="return chk3()" maxlength="10"></td>
            </tr>
			<tr>
              <td><label>Loan Reason</label></td>
              <td><label for="reason"></label>
              <input type="text" name="reason" id="reason" onBlur="chk3()" required></td>
            </tr>
  <tr>
    <td><label>Gender</label></td>
    <td><input name="gender" type="radio" value="male" required>Male <input name="gender" type="radio" value="female">Female</td>
 </tr>
  <tr>
    <td><label>Place</label></td>
    <td><input name="place" type="text" required></td>
    
  </tr>
   <tr>
              <td><label>Account-no:</label></td>
              <td><label for="Account"></label>
              <input type="text" name="ac" required id="ac" onBlur="chk3()" onKeyPress="return chk3()" maxlength="10"></td>
            </tr>
  <tr>
    <td><label>Bank Name</label><br>
    <input name="bankname" type="text" required></td>
  
    <td><label>Place(Bank)</label><br><input name="bplace" type="text" required></td>
    </tr>
  <tr>
    <td><label>Annual Income</label></td>
    <td><input name="annual" type="text" maxlength="5" onKeyPress="return chk3()" required></td>
  </tr>
  <tr>
    <td>Have owned your own Space: <br><input name="space" type="radio" value="yes" required>Yes <input name="space" type="radio" value="no">No </td>
   
    <td>If yes specify:<br><input name="specify" type="text"></td>
  </tr>
  <tr><td colspan="2" align="center"><input name="submit" type="submit" value="Request" style="border:solid;></td></tr>
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