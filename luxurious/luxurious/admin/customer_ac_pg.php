<?php
  require "../lib.php";
 include('../base_url.php');
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Luxurious Tourism</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>../style/default.css" />
</head>
<body>
<div id="logo-wrap">
<div id="logo">
	
	<h1><a href="#" class="serif" style="text-align:center" > LUXURIOUS TOURISM </a></h1>
         
       <h2 class="serif" style="text-align:center"><marquee behavoiur="slide"direction="alternate">
   Welcome To Our Luxurious Tourism ,To Enjoy Yourself.</marquee></h2>
              
</div>
</div>
<!-- start header -->
<div id="header">
	<div id="menu">	</div>
</div>
<!-- end header -->
<!-- start page -->
<div id="wrapper">
<div id="wrapper-btm">

		<div id="page1">
				<div id="page1-bg-top">
					<div id="content1">
					<table  height="100" width="0"> </table>
							<table align="center">
								<form action="customer_ac.php" method = "post">
									<tr>
										<td>Phone Number:</td>
									</tr>
									<tr>
										<td><input type="text" name="phn" size='30'></td>
									</tr>
									<tr>
										<td>Name:</td>
									</tr>
									<tr>
										<td><input type="text" name="name" size="30"></td>
									</tr>
									<tr>
										<td>Address:</td>
									</tr>
									<tr>
										<td><input type="text" name="address" size="30"></td>
									</tr>
									<tr>
										<td><input type="submit" value="Submit"><input type="reset" value="Reset"></td>
									</tr>
								</form>
							</table>
					</div>
				</div>
				<div id="sidebar1">
				<table  height="100" width="0" >  </table>
					<ul>
                    	<a href="<?php echo base_url();?>customer_ac_pg.php">Create customer account</a>
                         
                    	<hr ><a href="<?php echo base_url();?>changepasswordpg.php">Change Password</a></hr>
                       
                        <hr ><a href="<?php echo base_url();?>newuser.php">Create User</a></hr>
                         
                        <hr ><a href="<?php echo base_url();?>logoff.php">Logout</a></hr>
                    </ul>
				</div>
				
		</div>
            
</div>
</div>  
<!-- end page -->
<?php 
    include('admin_footer.php');
?>
