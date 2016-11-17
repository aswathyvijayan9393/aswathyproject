<?php //staff details
include("config.php");//include db connection
session_start();//start session
if(!($_SESSION['adm']))
{
header("location:login.php");//check the loggedin is admin or not
}
$username=$_SESSION['adm'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin</title>
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
</head>
<body>
<div class="main">
  <!--==============================header=================================-->
  <header>
     <h1><img src="images/hai.png" alt="" width="940" height="95" > </a></h1>
   
    <div class="clear"></div>
    <nav class="box-shadow">
      <div>
        <ul class="menu">
          <li class="home-page"><a href="admin.php"><span></span></a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          
          <li><a href="contacts.php">Contacts</a></li>
		  <li><a href="adminview.php">Feedback</a></li>
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
            <h3><font color="#FF0000">Functionalities:</font></h3><!--  functionalities  -->
            <ul class="list-1">
             
              <li><a href="admincropbooking.php"><font color="#0000FF"><b>Crop Booking Approval</b></font></a></li>
               <li><a href="userapprove.php"><font color="#0000FF" ><b>User Approval</b></font></a></li>
            
             <li><a href="adminloan.php"><font color="#0000FF" ><b>Loan Approval</b></font></a></li>
            
            
              
              <li><a href="adminevents.php"><font color="#0000FF" ><b>News and Events</b></font></a></li>
              <li><a href="admincrops.php"><font color="#0000FF" ><b>Add crops</b></font></a></li>                
			  <li><a href="admininbox.php"><font color="#0000FF" ><b>Inbox</b></font></a></li>
              <li><a href="addstaff.php"><font color="#0000FF" ><b>Add staff</b></font></a></li>
			 
</ul>
          </div>
          <div class="block-6">
            <h3 class="p6"><font color="#0000FF">Add staff</font></h3>
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
              <td><label for="name">Designation</label></td><td>
           <input name="designation" type="text" id="designation" onBlur="chk()" onKeyPress="return onlyAlphabets(event,this);" required><span id="nam"></span></td>
            </tr>
            
  
   <tr>
               <td><label for="address">Address</label></td><td>
              <textarea name="address" id="address" cols="24" rows="3" onBlur="chk5()"></textarea>
              <span id="addr"></span></td>
            </tr>
  
  
  <tr>
              
              <td><label for="contact">Contact_no</label></td><td>
              <input type="text" name="contact" id="contact" onBlur="chk3()" onKeyPress="return chk3()" maxlength="12" value="91" required></td>
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
      </div>
      <div class="clear"></div>
    </div>
    <div class="aside">
      
    </div>
  </section>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{   
 $photo=$_FILES['photo']['name'];
	
	$name=$_POST['name'];
	$designation=$_POST['designation'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	move_uploaded_file($_FILES['photo']['tmp_name'],getcwd()."\\upload\\$photo");
	
	
	
	$ins=mysql_query("insert into tblstaff(photo,name,designation,address,contactno,emailid) values('$photo','$name','$designation','$address','$contact','$email')");

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
