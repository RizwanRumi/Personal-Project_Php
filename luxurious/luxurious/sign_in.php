<?php
	require "lib.php";
	include('base_url.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Luxurious Tourism</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?php echo base_url();?>style/default.css" rel="stylesheet" type="text/css" />
        <script language="javascript">
          
			function reset(){
				document.getElementById('form1').reset();
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

		<div id="page1">
				<div id="page1-bg-top">
					<div id="content1">
					<table  height="100" width="0" > </table>
						<table align="center">
						<form method="post" action="create_customer.php" name="form" id="form">
						
									<tr>
										<td>Your Name</td>
										<td><input type="text" name="username"></td>
									</tr>
									<tr>
										<td>Your Email </td>
										<td><input type="text" name="email"></td>
									</tr>
									<tr>
										<td>Passward</td>
										<td><input type="text" name="passward"></td>
									</tr>
									<tr>
										<td>Address</td>
										<td><input type="text" name="address"></td>
									</tr>
									<tr>
										<td>Contact</td>
										<td><input type="text" name="contact"></td>
									</tr>
									<tr align="center">
									<td>
										<input type="submit" value="Submit" onclick="return check()">
									</td>
								    </tr>
						</form>
						</table>
						
						<form method="post" action="sign_in.php" name="form1" id="form1">
						<table align="center" >
						       <tr >
                   					<td ><input type="submit" value="Reset" onclick="return reset()"></td>
                                </tr>      
                        </table>
						</form>	
						
													
					
                     </div>
				</div>

	<!-- end content -->
	
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
</div>
</div>
<!-- start footer -->
<?php 
    include('footer.php');
?>


