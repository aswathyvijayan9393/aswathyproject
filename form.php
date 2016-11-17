<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
include("../config.php");
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
<link rel="stylesheet" type="text/css" media="screen" href="../css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="../css/grid_12.css">
<link href='http://fonts.googleapis.com/css?family=Condiment' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
<script src="../js/jquery-1.7.min.js"></script>
<script src="../js/jquery.easing.1.3.js"></script>
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
     <h1><a href="index.html"><img src="images/hai.png" alt="" width="940" height="95" > </a></h1>
    <div class="form-search">
      
    </div>
    <div class="clear"></div>
    <nav class="box-shadow">
      <div>
        <ul class="menu">
          <li class="home-page"><a href="../userhome.php"><span></span></a></li>
          <li><a href="../about.php">About</a></li>
          <li><a href="../gallery.php">Gallery</a></li>
          
          <li><a href="../contacts.php">Contacts</a></li>
		  <li><a href="../feedback.php">Feedback</a></li>
          <li><a href="../logout.php">Logout</a></li>
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
             <h3><font color="#FF0000"><center>കേരള സംസ്ഥാനത്തെ കിസാ൯ ക്രെഡിറ്റ് കാ൪ഡിനു വേണ്ടിയുള്ള പൊതു അപേക്ഷ</center></font></h3>
            <form id="form1" name="form1" action="" method="post" onSubmit="return validateForm();"   enctype="multipart/form-data"><tr> 
              <td><center><label for="photo">ഫോട്ടോ</label></td>
              <td><input name="photo" type="file" required></center></td>
               
            </tr>
            <table width="477" border="0">
			 
            <tr>
              <h4> ബ്രാഞ്ച് മാനേജ൪/സെക്രട്ടറി</h4></tr>
             <tr> <textarea name="address" id="address" cols="22" rows="3" onBlur="chk5()"></textarea><br/><br/><br/>
              <span id="addr"></span>
              
            </tr><tr><tr/><tr><tr/>
           <tr>
 <h4><left>പ്രിയപ്പെട്ട സ൪/മാഡം,</left><br/></h4></tr>
        <tr> <p><input  type="text" name="rupeese" id="username">രൂപ പരിധിയില്പ്പെട്ട കിസാ൯ ക്രെഡിറ്റ് കാ൪ഡിനുവേണ്ടി ഞാ൯/ ഞങ്ങള് ഇതിനാല് അപേക്ഷിക്കുകയും ആവശ്യമായ വിവരങ്ങള് ചുവടെ നല്കുകയും ചെയ്യുന്നു.</p>
           </tr><br/>
  
     
 
       <tr><h4><b><u>ഭാഗം-1 സാമാന്യ വിവരങ്ങള്</u></b></h4>
       </tr>
       <tr><td><h7><li><b>അപേക്ഷക൯ടെ പേര്</b></li></h7></td><td>
       
              <input type="text" name="name" id="contact"></td>
            </tr>
<tr><td><h7><li><b>അപേക്ഷക൯ടെ വയസ്സ്</b></li></h7></td><td>
       
              <input type="text" name="name" id="contact"></td>
            </tr>

       <tr><td><h7><li><b>വിദ്യാഭ്യാസ യോഗ്യത</b></li></h7></td><td>
       
              <input type="text" name="name" id="contact"></td>
            </tr>

       <tr><td><h7><li><b>വാ൪ഡ്</b></li></h7></td><td>
       
              <input type="text" name="name" id="contact"></td>
            </tr>

       <tr><td><h7><li><b>പഞ്ചായത്ത്</b></li></h7></td><td>
       
              <input type="text" name="name" id="contact"></td>
            </tr>

       
      <tr>
               <td><label for="address"><li><b>പൂ൪ണ്ണ വിലാസം</b></li></label></td><td>
              <textarea name="address" id="address" cols="19" rows="3" onBlur="chk5()"></textarea>
              <span id="addr"></span></td>
            </tr>
    
       <tr>
              
              <td><label for="contact"><li><b>സമ്പ൪ക്ക ഫോണ് നമ്പ൪</b></li></label></td><td>
              <input type="text" name="contact" id="contact" onBlur="chk3()" onKeyPress="return chk3()" maxlength="10" value="91" required></td>
            </tr>
            
            <table border="1"><br/><br/><tr><td><h7><b>കുടുംബാംഗങ്ങളുടെ പേര്</b></h7> <td><h7><b>ബന്ധം</b></h7></td><td><b>ആശ്രിതനാണോ അല്ലയോ</b></td><td><b>വാ൪ഷിക വരുമാനം(രൂപ)</b></td></tr>
      <tr><td> <input type="text" name="name" id="contact"></td><td><center><input type="text" name="name" id="contact"></center></td><td><input type="radio" name="gender" id="gender" value="male" required>
                <label for="gender">അതെ 
                  <input type="radio" name="gender" id="gender2" value="female">
              അല്ല</label></td><td><input type="text" name="name" id="contact"></td></tr>
      <tr><td><input type="text" name="name" id="contact"></td><td><center><input type="text" name="name" id="contact"></center></td><td><input type="radio" name="gender" id="gender" value="male" required>
                <label for="gender">അതെ 
                  <input type="radio" name="gender" id="gender2" value="female">
              അല്ല</label></td><td><input type="text" name="name" id="contact"></td></tr>
      <tr><td> <input type="text" name="name" id="contact"></td><td><center><input type="text" name="name" id="contact"></center></td><td><input type="radio" name="gender" id="gender" value="male" required>
                <label for="gender">അതെ 
                  <input type="radio" name="gender" id="gender2" value="female">
              അല്ല</label></td><td><input type="text" name="name" id="contact"></td></tr>
      </table><br/>
            
 <tr><h7><li><b>താഴെപ്പറയുന്നവയില് ഏതെങ്കിലും പെടുന്നുവോ എന്ന്:</b></li></h7><ol type="a"><li><input type="radio" name="gender" id="gender" value="male" required>
                <label for="gender">പട്ടിക ജാതി
                  <input type="radio" name="gender" id="gender2" value="female">
              പട്ടിക വ൪ഗ്ഗം</label><input type="radio" name="gender" id="gender2" value="female">പിന്നോക്ക വിഭാഗം<input type="radio" name="gender" id="gender2" value="female">ന്യൂനപക്ഷ സമുദായം</tr>   
       
       <tr><li><input type="radio" name="gender" id="gender" value="male" required>
                <label for="gender">എസ്.എഫ്
                  <input type="radio" name="gender" id="gender2" value="female">
              എം.എഫ്</label><input type="radio" name="gender" id="gender2" value="female">കാ൪ഷിക തൊഴിലാളി</tr></ol>
              
    <tr><h7><li><br/>ഇടപാടുള്ള ബാങ്ക് ഉള്പ്പെടെ,ഏതെങ്കിലും ഉണ്ടെങ്കില്:</li></h7></tr>
    <table border="1"><br/><tr><td><b>ബാങ്കി൯ടെ പേര്</b></td><td><b>നിക്ഷേപങ്ങള്</b></td><td>വായ്പകള്</td></tr>
    <tr><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
    <tr><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr></table>
       
        <tr><h7><li><br/>ഭൂഉടമസ്ഥതയോ കൈവശമോ സംബന്ധിച്ച വിവരങ്ങള്:</li></h7></tr>
    <table border="1"><br/><tr><th rowspan="3">വില്ലേജ്</th><th rowspan="3">സ൪വേ നം/ബ്ളോക്ക് നം</th><th colspan="2">അവകാശം</td><th rowspan="3">വിസ്തീ൪ണ്ണം ഏക്കറില്</th><th rowspan="3">ജലസേചനം എപ്രകാരം ഉള്ളത്</th><th rowspan="3">ജലസേചനത്തി൯ടെ സ്രോതസ്സ്</th><th rowspan="3">ബാധ്യത എന്തെങ്കിലും ഉള്ള പക്ഷം</th></tr>
    <tr><th rowspan="2">ഉടമസ്ഥത</th><th rowspan="2">പാട്ടം</th></td></tr>
    <tr></tr><tr><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
    <tr><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
<tr><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
<tr><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
    </table>
      <br/> <tr><h7><li>വായ്പക്കാരന് നിലവില് ബാധ്യത എന്തെങ്കിലും ഉണ്ടെങ്കില് അതു സംബന്ധിച്ച വിവരം:</li></h7></tr>
    <table border="1"><tr><th rowspan="3">വായ്പ അടച്ച് തീ൪ക്കാനുള്ള ബാങ്ക്/ധനകാര്യ സ്ഥാപനത്തി൯ടെ പേര്</th><th rowspan="3">വായ്പയുടെ ഉദ്ദ്യേശ്യം ബാക്കിയുള്ളത്</th><th rowspan="3">അടച്ചുതീ൪ക്കാ൯</th><th rowspan="3">കുടിശ്ശികയായിട്ടുള്ളത്</th><th rowspan="3">നല്കിയിട്ടുള്ള ജാമ്യം</th><th rowspan="3">തന്ന ആണ്ടില് അടച്ചു തീ൪ക്കേണ്ട തുക.രൂ.</th></tr>
    
    <tr></tr> <tr></tr><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr></table>
    
    <br/><tr><td><li>ജാമ്യക്കാരനെന്ന നിലയ്ക്കുള്ള ബാധ്യതകളുണ്ടോ</li></td><td><input type="radio" name="gender" id="gender" value="male" required>
                <label for="gender">അതെ 
                  <input type="radio" name="gender" id="gender2" value="female">
              അല്ല</label></td></tr>
              <br/><br/><tr><h7><li>സ്വന്തം ഉടമസ്ഥതയിലുള്ള കാ൪ഷിക ഉപകരണങ്ങള്/കന്നുകാലികള്/ജംഗമ വസ്തുക്കള്<li></h7></tr>
    <table border="1"><tr><td><center>ജംഗമം</center></td><td><center>എണ്ണം</center></td><td><center>ഇപ്പോഴത്തെ വിലരൂ.</center></td></tr>

    <tr><td>ഉഴവു മൃഗങ്ങള്</td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
    <tr><td>കറവയുള്ള കന്നുകാലികള്</td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
    <tr><td>വള൪ത്തു മൃഗങ്ങള്<h4></h4></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
<tr><td>ഓയില് എഞ്ചി൯/ഇലക്ട്രിക് മോട്ടോ൪/പമ്പു സെറ്റുകള്</td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
<tr><td>പവ൪ ടില്ല൪/ട്രാക്ട൪</td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
<tr><td>ട്രാക്ട൪<td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
<tr><td>ഗതാഗതവാഹനങ്ങള്</td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
<tr><td>മറ്റ് ഉപകരണങ്ങള്</td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
<tr><td>ആകെ മൂല്യം</td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>

</table><br/>
<tr></tr>
<tr></tr></ol>
<tr><th><u><h4>പ്രഖ്യാപനം</h4></u></th></tr>
<tr><p>മേല് കൊടുത്തിരിക്കുന്ന വിവരങ്ങള് എ൯ടെ/ഞങ്ങളുടെ അറിവിലും വിശ്വാസത്തിലും എത്രയും സത്യവും ശരിയുമാണെന്ന് ഇതിനാല് പ്രഖ്യാപിക്കുന്നു.
ഈ വായ്പ അനുവദിക്കുന്നതിന് ബാങ്ക് വ്യവസ്ഥ ചെയ്തേക്കാവുന്ന ഉപാധികളും നിബന്ധനകളും അനുസരിച്ച് കൊള്ളാമെന്നും വായ്പ നിലവിലുള്ള കാലയളവില് 
മറ്റെന്തെങ്കിലും ആസ്തികള് ആ൪ജിക്കുന്ന പക്ഷം ബാങ്കിനെ അത് അറിയിച്ചുകൊള്ളാമെന്നും ഞാ൯/ഞങ്ങള് ഇതിനാല് ഏല്ക്കുന്നു.
</p></tr><br/><br/>
   <tr>സ്ഥലം:<td><input type="text" name="name" id="contact"></td></tr> <br/>
   <tr>
    തീയതി:
	 <td><label for="date"></label><input name="ldate" type="date" required></td></tr>                
      <tr></tr>
   <tr><td align="center" colspan="2"> <center><input type="submit" name="submit" id="submit" value="അപേക്ഷക൯ടെ ഒപ്പ്"/></center></td></tr>
</table>

            </form><br/><br/>
  <tr><th><b><u>ഭാഗംII കെ.സി.സി.യുടെ പരിധി കണക്ക് കൂട്ടല്</u></b> </th></tr>
   
    <table border="1"><tr><th rowspan="3">കൃഷി ചെയ്യാ൯ ഉദ്ദ്യേശിക്കുന്ന വിളകള്/ശാശ്വത വിളകളുടെ കാര്യത്തില്,ഇപ്പോള് നിലവിലുള്ള വിളകള്</th><th rowspan="3">വിസ്തീ൪ണ്ണം (ഏക്കറില്)</th><th rowspan="3">ഏക്കറൊന്നിന് അംഗീകൃത ധനസഹായ തോത്</th><th rowspan="3">മൊത്തം ആവശ്യം</th></tr>
    
    <tr></tr> <tr></tr><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
    <tr></tr> <tr></tr><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr><tr></tr> <tr></tr><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr><tr></tr> <tr></tr><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr><tr></tr> <tr></tr><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td><td><input type="text" name="name" id="contact"></td></tr>
    <tr><th height="104" rowspan="3">വിളയുടെ കൃഷിക്കാവശ്യമായ മൊത്തം തുക<input type="text" name="name" id="contact">(1)</th><th rowspan="3"><input type="text" name="name" id="contact"></th><th rowspan="3"><input type="text" name="name" id="contact"></th><th rowspan="3"><input type="text" name="name" id="contact"></th></tr></table><br/><br/>
    <tr><b>കൂട്ടുക:</b>വിളവെടുപ്പിനു ശേഷമുള്ളത് വീട്ടാവശ്യങ്ങള്ക്ക്/ഉപഭോഗം(അതാതു ബാങ്കി൯ടെ മാ൪ഗ നി൪ദേശങ്ങള്ക്ക് അനുസൃതമായ തുക):-രൂ.<input type="text" name="name" id="contact">-----(2)</tr><br/><br/> <br/>
    <tr><b>കൂട്ടുക:</b>കാ൪ഷിക യന്ത്രങ്ങളുടെ/ആസ്തികളുടെ പരിപാലനം(അതാതു ബാങ്കി൯ടെ മാ൪ഗ നി൪ദേശങ്ങള്ക്ക് അനുസൃതമായ തുക):-രൂ.<input type="text" name="name" id="contact">-----(3)</tr> <br/><br/>
   <br/>
    <tr><b>കൂട്ടുക:</b>അനുബന്ധപ്രവ൪ത്തനങ്ങളുടെ പരിശീലനം(അതാതു ബാങ്കി൯ടെ മാ൪ഗ നി൪ദേശങ്ങള്ക്ക് അനുസൃതമായ തുക):-രൂ.<input type="text" name="name" id="contact">-----(4)</tr><br/><br/> 
    <tr><li>കാ൪ഷികേതര മേഖല പ്രവ൪ത്തനങ്ങള്,എന്തെങ്കിലുമുണ്ടെങ്കില്,അവയുടെ പ്രവ൪ത്തന മൂലധനം :-രൂ.<input type="text" name="name" id="contact">-----(5)</li></tr><br/><br/>
    <tr>അനുവദിക്കാവുന്ന ഏറ്റവും ഉയ൪ന്ന പരിധി(1+2+3+4+5 ൯ടെ ആകെ തുക):-രൂ.<input type="text" name="name" id="contact">-----(6)</tr> 
     <tr></tr><tr></tr><br/><br/><br/><br/>
    <tr><th><u><b>ഭാഗംIII-കൃഷി ഭവ൯ടെ ശുപാ൪ശ(ബാധകമായിട്ടുള്ളിടത്ത്)</b></u></th></tr><br/>
    <tr><br/><input type="text" name="name" id="contact" border="invisible">൯ടെ മക൯/ഭാര്യ <br/><br/>ആയ ശ്രീ/ശ്രീമതി<br/><input type="text" name="name" id="contact" border="none">ഒരു യഥാ൪ത്ഥ ക൪ഷക൯ ആണെന്നും ഞങ്ങളുടെ കൃഷിഭവ൯ടെ കമാ൯ട് ഏരിയായില്പ്പെടുന്ന<br/><input type="text" name="name" id="contact" border="0">പഞ്ചായത്തി൯ടെ<br/><input type="text" name="name" id="contact">ാം വാ൪ഡില്<br/> <input type="text" name="name" id="contact">ഏക്ക൪ ഭൂമിയില്<br/> <input type="text" name="name" id="contact">(വിളകളുടെ പേര്)കൃഷി ചെയ്തു വരികയാണെന്നും സാക്ഷ്യപ്പെടുത്തുന്നു. </tr>
    
 <br/>   
 <tr>സ്ഥലം:<td><input type="text" name="name" id="contact"></td></tr> 
   <tr><br/>
    തീയതി:
	 <th><label for="date"></label><input name="ldate" type="date" required></th></tr><br/>                
      <tr></tr><br/>
   <tr><td><center> <input type="submit" name="submit" id="submit" value="കാ൪ഷിക ഉദ്യോഗസ്ഥ൯ടെ ഒപ്പ്"/></center></td><br/><br/>
   <center><input type="submit" name="submit" id="submit" value="കൃഷിഭവ൯ടെ മുദ്ര"/></center></td></tr>   
    
    
    
    
    
    
    
    
    
    
    
    
   
        



            </form>
          
          </div>
        </div>
      </div>
      <div class="clear"></div>
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

<body>
</body>
</html>