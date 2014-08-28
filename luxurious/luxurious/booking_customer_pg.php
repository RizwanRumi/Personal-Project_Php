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

			function showRSS(str)
				{
				if (str.length==0)
				  {
				  document.getElementById("rssOutput").innerHTML="";
				  return;
				  }
				if (window.XMLHttpRequest)
				  {// code for IE7+, Firefox, Chrome, Opera, Safari
				  xmlhttp=new XMLHttpRequest();
				  }
				else
				  {// code for IE6, IE5
				  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }
				xmlhttp.onreadystatechange=function()
				  {
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
					{
					document.getElementById("rssOutput").innerHTML=xmlhttp.responseText;
					}
				  }
				xmlhttp.open("GET","getrss.php?q="+str,true);
				xmlhttp.send();
				}

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
			
						<form method="post" action="log_off_customer.php" name="form1">
												
								<table  align="right">
								 <tr>
									<td > <input type="Submit" value="Log Out"> </td>
								</tr>	
								</table>
						</form>	
 <br><br> <br>
		<?php
	            mysql_connect("mysql.neq3.com","u148570980_rumi","rr12345");
				mysql_select_db("u148570980_tour");
	
             	$table = "advertise_book";
			    $query = "select * from $table ";
				$advert = mysql_query($query);
									  
                if(mysql_num_rows($advert) >= 1)
										{   
											while($tem = mysql_fetch_array($advert))
												{
											
													echo "<h2> $tem[0] </h2>";
										
												}
									  }

?>
		   <br><br><br>
		
		<form method="post" action="contact_us.php" name="form1">	
			<table>
				<tr>
					<td>Your Name</td>
					<td><input type="text" name="p_username"></td>
				</tr>
				<tr>
					<td>Your Email </td>
					<td><input type="text" name="p_email"></td>
				</tr>
				<tr>
					<td>Address</td>
					<td><input type="text" name="p_address"></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><input type="text" name="p_contact"></td>
				</tr>
				<tr >   
				<td> <br>Want to receive mail
					<input type="radio" name="val" id="val" value="yes">Yes
					<input type="radio" name="val" id="val" value="no">No
				</td>
			</tr>
			</table>
			<br> </br>
			<h3> Please Select Date For Package: </h4><br>
				
				<tr >
			                                    <td>Select Date:</td>
														<select name="Day">
																<?php
																 for($i=1;$i<=31;$i++)
																 {
																	echo "<option value='$i'>$i</option>";
																 }
																?>
													     </select>	
                                                <td>
														<select name="Month">
														    <option value="1">January</option>
														    <option value="2">February</option>
														    <option value="3">March</option>
														    <option value="4">April</option>
														    <option value="5">May</option>
															<option value="6">June</option>
													     	<option value="8">August</option>
													     	<option value="9">September</option>
														    <option value="10">October</option>
														    <option value="11">November</option>
														    <option value="12">December</option>
                        								</select>
												  </td> 
													
													 <select name="Year">
														<?php
														 for($i=2000;$i<=2040;$i++)
														 {
															echo "<option value='$i'>$i</option>";
														 }
														?>
													</select>								
                    </tr>
					<br><br>



					<select onchange="showRSS(this.value)">
					<option value="">Select an Offer:</option>
					<option value="Full">Full Package</option>
					<option value="Custom">Customized</option>
					</select>
					<br>
					<div id="rssOutput">Details Show In here...</div>

						<table>
								<tr align="center">
									<td>
										<input type="Submit" value="Submit" >
									</td>
								</tr>
						</table>
        </form>
		<form method="post" action="booking_customer_pg.php" name="form" id="form">
			<table align="center">
			   <tr>
		          <td align="centre"> <input type="submit" value="Reset" onclick="return reset()"> </td>
			   </tr>
			 </table>
		</form>
		
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
