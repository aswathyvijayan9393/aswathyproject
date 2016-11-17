<!DOCTYPE html>
<html lang="en">
<head>
<title>kizhanguvargangal</title>
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
<header>
    <h1><img src="images/hai.png" alt="" width="940" height="95" > </a></h1>
    <div class="form-search">
      
    </div>
    <div class="clear"></div>
    <nav class="box-shadow">
      <div>
        <ul class="menu">
          <li class="home-page"><a href="index.php"><span></span></a></li>
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
<div class="main">
  <!--==============================header=================================-->
  <header>
   <section id="content">
    <div class="container_12">
      <div class="grid_12">
        <div class="wrap pad-3">
        <table border="1" style="background-color:#C60"><tr><th>വിള</th><th>വസ്തു</th><th> നടീല് കാലം</th><th>  വിളകാലാവധി</th></tr>
        <tr><td>മരച്ചീനി</td><td>15.സെമീനീളമുള്ള മരച്ചീനി കമ്പുകള്</td><td>എല്ലാകാലവും</td><td>10മാസം,6-7മാസം</td></tr>
        <tr><td>മധുരകിഴങ്ങ്</td><td>25സെമീനീളമുള്ള ഇലയോടുകൂടിയ വള്ളികള്</td><td>ജനുവരി,ജൂണ്,സെപ്റ്റംബ൪</td><td>3മാസം</td></tr>
        <tr><td>ചേന</td><td>500 ഗ്രാം തൂക്കമുള്ള വിത്തു ചേന</td><td>ഫെബ്രുവരി</td><td>8-9മാസം</td></tr>
        <tr><td>കാച്ചില്</td><td>250 ഗ്രാം തൂക്കമുള്ള കാച്ചില്</td><td>മാ൪ച്ച്-ഏപ്രില്</td><td>8-9 മാസം</td></tr>
        <tr><td>പാല്ചേമ്പ്</td><td>80 ഗ്രാം തൂക്കമുള്ള വിത്ത്</td><td>ഏപ്രില്-മേയ്</td><td>8-9 മാസം</td></tr>
        <tr><td>ശീമചേമ്പ്</td><td>25 ഗ്രാം തൂക്കമുള്ളത്</td><td>ഏപ്രില്-മേയ്</td><td>5-6 മാസം</td></tr>
        <tr><td>ചെറുകിഴങ്ങ്</td><td>100 ഗ്രാം തൂക്കമുള്ളത്</td><td>ഏപ്രില-മേയ്</td><td>7-8 മാസം</td></tr>
        <tr><td>കൂവ</td><td>20 ഗ്രാം തൂക്കമുള്ളത്</td><td>ഏപ്രില്-മേയ്</td><td>11 മാസം</td></tr>
        
        </table>
        </div></div></div></section></header></div></body></html>