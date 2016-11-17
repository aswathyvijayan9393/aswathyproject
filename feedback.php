<?php
include("config.php");
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
             <div class="map img-border">
             <img src="images/register.jpg" width="270" height="187"/>
            </div>
           
          </div>
          <div class="block-6">
            <h3><font color="#FF0000">POST YOUR FEEDBACK</font></h3>
            <form id="form1" action="" method="post">
              <table width="477" height="231" border="0">
                <tr>
                  <th scope="row">USERNAME</th>
                  <td><label for="usernm"></label>
                      <input type="text" name="usernm" required id="contact"></td>
                </tr>
                <tr>
                  <th scope="row">Feedback</th>
                  <td><label for="comment"></label>
                      <textarea name="comment" id="address" cols="20" rows="5" onBlur="chk5()"></textarea></td>
                  <th><span id="addr"></span></th>
                </tr>
                <tr>
                  <td align="center" colspan="2"><input type="submit" name="submit" id="submit" value="SUBMIT"/></td>
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
if(isset($_POST['submit']))
{
	$username=$_POST['usernm'];
	$comment=$_POST['comment'];
	$ins=mysql_query("insert into tblfeedback(comment,username)values('$comment','$username')");
	if($ins)
	{
		echo "<script>alert('Feedback submitted')</script>";
	}
	else
	{
		echo mysql_error();
	}
}
?>