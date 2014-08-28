<?php
	session_start();
    session_destroy();
	require "lib.php";
	include('base_url.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Luxurious Tourism</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo base_url();?>style/default.css" rel="stylesheet" type="text/css" />
<head>
	<head>
		<script language="javascript">
						
			function reset(){
				document.getElementById("form").reset();
			}
			
		</script>
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
	<div id="menu">
		<ul>
			<li ><a href="<?php echo base_url();?>index.php"> <I> Homepage </I></a></li>
			<li><a href="<?php echo base_url();?>about.php" > <I>  About Luxurious </I></a></li>
			<li><a  href="<?php echo base_url();?>services.php" > <I> Services </I></a></li>
			<li><a  href="<?php echo base_url();?>packages.php"> <I> Luxurious Packages </I></a></li>
			<li class="current_page_item"><a  href="<?php echo base_url();?>booking.php" > <I> Hotels & Travels </I></a></li>
			<li><a href="<?php echo base_url();?>contact.php"> <I> Contact </I></a></li>
		</ul>
	</div>
</div>
<!-- end header -->
<!-- start page -->
<div id="wrapper">
<div id="wrapper-btm">
<div id="page">
	<!-- start content -->
	<div id="content">

		
					<table  height="50" width="0" align="center"> </table>
						<?php
                           
							$name = trim($_POST['username']);
							$email = trim($_POST['email']);
							$pass = $_POST['passward'];
							$address = trim($_POST['address']);
							$phone = trim($_POST['contact']);
							
							
							if(!$name) echo "Your name field is empty";
							else if(!$email) echo "Your email field is empty";
							else if(!$pass) echo "Your password field is empty";
							else if(!$address) echo "Your address field is empty";
							else if(!$phone) echo "Your contact field is empty";
							else
							{
								createcustomer($name,$email,$pass,$address,$phone);
								echo "   &nbsp;&nbsp;&nbsp;    Welcome $name !!!<br>";
								echo "   &nbsp;&nbsp;&nbsp;    You have created successfully .             THank YOU  !!!  <br>";
								Echo" &nbsp;&nbsp;&nbsp;      Now you have to go log off , then go to booking page "; 
							}	
	                      ?>
						  
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<div id="sidebar">
	        
		<table  height="0" width="0" >  
				<tr>
					   <td> <a href="logoff_customer.php"><input type="submit" name="Submit" value="Sign out"></a> </td>
				</tr>	
        </table>				
	</div>
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
</div>
</div>
<!-- start footer -->
<?php 
    include('footer.php');
?>
