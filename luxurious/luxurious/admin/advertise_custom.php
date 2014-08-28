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
					  <table  height="150" width="0"> </table>


								<?php
									
									 mysql_connect("mysql.neq3.com","u148570980_rumi","rr12345");
						             mysql_select_db("u148570980_tour");
									  
									  $table = "advertise_book";
									  $query = "select * from $table ";
									  $advert = mysql_query($query);
									  
									  if(isset($_POST['advertise']))
									      {
										        $adv1 =$_POST['advertise']; 
										        $update = mysql_query("update $table set Advertise_Book='$adv1' WHERE ID = 1 ");
									      }
									
								?>
								
                              <h4 align="center"> CREATE ADVERTISE IN PACKAGES, GO TO UPDATE Booking PAGE 
							
					     <a  href="<?php echo base_url();?>updatebooking.php"><input type="submit" value="Go" ></a>
                        </h4>
					</div>
				</div>
				<div id="sidebar1">
				<table  height="100" width="0" >  </table>
					<ul>
					     <a href="<?php echo base_url();?>newuser.php">Create New User</a>
						 
						 <hr ><a href="<?php echo base_url();?>changepasswordpg.php">Change Password</a></hr>
                    	
						 <hr ><a href="<?php echo base_url();?>updatepackages.php">Update Packages</a></hr>
						 
						 <hr ><a href="<?php echo base_url();?>updatebooking.php">Update booking</a></hr>
						
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
