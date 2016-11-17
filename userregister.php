<!-----------------user registration------------------>
<?php
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>
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
function validateForm() {
    var x = document.forms["form1"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}
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
		alert("Password Mismatched");
	}
	else
	{
		document.getElementById("password").innerHTML="";
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
     <h1><a href="index.html"><img src="images/hai.png" alt="" width="940" height="95" > </a></h1>
    <div class="form-search">
      
    </div>
    <div class="clear"></div>
    <nav class="box-shadow">
      <div>
         <ul class="menu">
          <li><a href="index.php"><span>Home</span></a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
                   
          <li><a href="contacts.php">Contacts</a></li>
		   <li><a href="services.php">Services</a></li>
           <li><a href="feedback.php">Feedback</a></li>
          
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
             <button type="button" onClick="history.back();"><img src="images/download (4).jpg" height="48"/></button>
            <div class="map img-border">
             <img src="images/register.jpg" width="270" height="187"/>
            </div>
           
          </div>
          <div class="block-6">
            <h3><font color="#FF0000">Register Here</font></h3>
            <form id="form1" name="form1" action="" method="post" onSubmit="return validateForm();"   enctype="multipart/form-data" >
            <table width="477" border="0">
			 <tr>
              <td><label for="photo">Photo</label></td>
              <td><input name="photo" type="file" required></td>
               
            </tr>
     <tr>
              <td><label for="name">Name</label></td><td>
           <input name="name" type="text" id="name" onBlur="chk()" onKeyPress="return onlyAlphabets(event,this);" required><span id="nam"></span></td>
            </tr>
   <tr>
              <td><label for="username"><font color="#FF0000">Username*</font></label></td>
              <td><input  type="text" name="username" id="username" onBlur="chk1()" required><span id="usr"></span></td>
            </tr>
 
  <tr>
              <td><label for="password"><font color="#FF0000">Password*</font></label></td><td>
              <input type="password" name="password" id="password" onBlur="chk2()" required><span id="pass"></span></td>
            </tr>
       <tr>
        <td><label for="confirm"><font color="#FF0000">Confirm Password*</font></label></td>
        <td><input  type="password" name="confirm" id="confirm"  onBlur="chk10()" required></td>
       </tr>
  
  <tr>
              <td><label for="gender">Gender</label></td>
              <td><input type="radio" name="gender" id="gender" value="male" required>
                <label for="gender">Male 
                  <input type="radio" name="gender" id="gender2" value="female">
              Female</label></td>
            </tr>
  
   <tr>
               <td><label for="address">Address</label></td><td>
              <textarea name="address" id="address" cols="24" rows="3" onBlur="chk5()"></textarea>
              <span id="addr"></span></td>
            </tr>
  
  
  <tr>
              
              <td><label for="contact">Contact_no</label></td><td>
              <input type="text" name="contact" id="contact" onBlur="chk3()" onKeyPress="return chk3()" maxlength="10" value="" required></td>
            </tr>
   
          <tr>
          <td><label for="email">Email ID</label></td>
         <td> <input type="text" name="email" id="email" required /></td> <td><span id="email"></span></td>
        </tr>
		

   <tr>	<td colspan="2" align="center" nowrap="nowrap"><div class="button"> <input type="submit" name="submit" id="submit" value="register" border="2" /></div></td></tr>
</table>

            </form>
          
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>
<!--==============================footer=================================-->
</body>
</html>
<?php
if(isset($_POST['submit']))
{   
 $photo=$_FILES['photo']['name'];
	
	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	move_uploaded_file($_FILES['photo']['tmp_name'],getcwd()."\\upload\\$photo");
	
	$result=mysql_query("select *from tbluser where username='$username'");
	$r=mysql_fetch_array($result);
	if($r)
	{
		echo "<script>alert('User already exists');</script>";
	}
	else
	{
	$ins=mysql_query("insert into tbluser(photo,name,username,password,gender,address,contact,email) values('$photo','$name','$username','$password','$gender','$address','$contact','$email')");
	$ins1=mysql_query("insert into tbllogin(username,password,type,status) values('$username','$password','user','waiting')");
	}
	if($ins)
	{
		echo "<script>alert('Sucessfully Registered')</script>";
	}
	else
	{
		echo mysql_error();
	}
}
?>