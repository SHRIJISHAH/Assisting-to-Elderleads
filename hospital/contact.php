<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title> Contact us</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!--start-wrap-->
		
			<!--start-header-->
			<div class="header">
				<div class="wrap">
				<!--start-logo-->
				<div class="logo">
		<a href="index.html" style="font-size: 30px;">Assisting to Elderleads</a> 
				</div>
				<!--end-logo-->
				<!--start-top-nav-->
				<div class="top-nav">
					<ul>
						<li><a href="index.html">Home</a></li>
					
						<li class="active"><a href="contact.php">contact</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
				<!--end-top-nav-->
			</div>
			<!--end-header-->
		</div>
		    <div class="clear"> </div>
		   <div class="wrap">
		   	<div class="contact">
		   	<div class="section group">				
				<div class="col span_1_of_3">
					
      			<div class="company_address">
				     	
				   	
				</div>
				</div>				
				
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h2>Contact Us</h2>
				  </div>
				</div>
				<form name="contactus" method="post">
					<table>
					<div class="col span_2_of_3">
						<div class="contact-form">	
						















<!doctype html>
<html>
<head>
    <title>Timetable</title>
    <style type="text/css">
    body
    {
        font-family: arial;
    }

    th,td
    {
        margin: 0;
        text-align: center;
        border-collapse: collapse;
        outline: 1px solid #e3e3e3;
    }

    td
    {
        padding: 05px 05px;
    }

    th
    {
        background: #666;
        color: white;
        padding: 05px 05px;
    }

    td:hover
    {
        cursor: pointer;
        background: #666;
        color: white;
    }
    </style>

</head>
<body>
    <table width="80%" align="center" >
    <div id="head_nav">
   
</div>  

    <tr>
        <th>Name</th>
        
            <td>Shah Shriji A.</td>
            <td>Darji Dixita R.</td>
           
        </div>
    </tr>

    <tr>
        <th>Email</td>
        
            <td>shrijishah8@gmail.com</td>
            <td>darjidixita02@gmail.com</td>
          
        </div>
    </tr>

    <tr>
        <th>Phone No.</td>
        
            <td>7984625445</td>
            <td></td>
           
        </div>
    </tr>

    <tr>
        <th>Other</td>
        
            <td>BE in EC</td>
            <td>BE in Com.</td>
           

        </div>
    </tr>

    </table>

</body>
</html>

































				    </div>
  								
			  </div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
			</div>
	      <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="wrap">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.html">Home</a></li>
						
						<li><a h<span><label>BE in EC</label></span>
							ref="contact.php">contact</a></li>
					</ul>
		   	</div>
		  
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>

