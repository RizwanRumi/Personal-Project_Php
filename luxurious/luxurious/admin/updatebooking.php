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
	<div id="menu">	</div>
</div>
<!-- end header -->

<!-- start page -->
<div id="wrapper2">
<div id="wrapper-btm2">

		<div id="page3">
				<div id="page3-bg-top">
					<div id="content3">
					
					<form method="post" action="advertise_custom.php" name="form" id="form">
						
							<tr align="center">
								<td><h3 align="center"> Advertise </h3></td>
							
								<td ><textarea cols="70" rows="0" name="advertise" ></textarea></td>
							   
							 </tr>
							 <table  height="0" width="0"  align="center" > 						
									<tr align="center">
										<td >
										   <input type="submit" value="submit" >
										</td>
									</tr>
							</table>	
						</form>
							 <br><br>
					
						<form method="post" action="updatebooking.php" name="form" id="form">
					 	<?php
							mysql_connect("mysql.neq3.com","u148570980_rumi","rr12345");
						    mysql_select_db("u148570980_tour");
								/*--------------------- -------------------------------- For Packages list  -------------------------------------------- */
								
								
								  echo"
												<h2><U>Customer List </u></h2><br>";
												$table = "p_customer";
														
												$query = "select * from $table ";
												$package = mysql_query($query);
																				
												if(mysql_num_rows($package) >= 1)
													{  
														echo "
															<table border='2' cellpadding='10'>
																<tr>
																	  <th>Customer Name</th>
																	  <th>Email</th>
																	  <th>Address</th>
																	  <th>Contact</th>
																	  <th>Confirm</th>
																	  <th>Date </th>
																	  <th>Select Package</th>
																																  
																</tr>";
														while($tem = mysql_fetch_array($package))
															{
																{
																		echo "<tr>";
																		echo "<td>$tem[0]</td>";
																		echo "<td>$tem[1]</td>";
																		echo "<td>$tem[2]</td>";
																		echo "<td>$tem[3]</td>";
																		echo "<td>$tem[4]</td>";
																		echo "<td>$tem[5]/$tem[6]/$tem[7] </td>";
																		echo "<td>$tem[8] </td>";
																		
																		echo "</tr>";
																}
															}
														echo "</table> <br><br>";
													}
							?>
							
											
													 <tr>
													 <td> <input type='Submit' name='Submit' value='Delete all'></td>
													 </tr>
						</form>
						
						<form method="post" action="updatebooking.php" name="form" id="form">
					 	<?php
							mysql_connect("mysql.neq3.com","u148570980_rumi","rr12345");
						    mysql_select_db("u148570980_tour");
								
								/*--------------------- -------------------------------- For Packages list  -------------------------------------------- */
								
								
								  echo"
												<h2><U>Customize Customer List </u></h2><br>";
												$table = "p_customer_custom";
														
												$query = "select * from $table ";
												$package = mysql_query($query);
																				
												if(mysql_num_rows($package) >= 1)
													{  
														echo "
															<table border='2' cellpadding='10'>
																<tr>
																	  <th>Customer Name</th>
																	  <th>Email</th>
																	  <th>Address</th>
																	  <th>Contact</th>
																	  <th>Confirm</th>
																	  <th>Trans. </th>
																	  <th>Date </th>
																	  <th>Time </th>
																	  <th>hotel </th>
																	  <th>Date</th>
																	  <th>Days</th>
																	  <th>ship</th>
																	  <th>date</th>
																	   
																</tr>";
														while($tem = mysql_fetch_array($package))
															{
																{
																		echo "<tr>";
																		echo "<td>$tem[0]</td>";
																		echo "<td>$tem[1]</td>";
																		echo "<td>$tem[2]</td>";
																		echo "<td>$tem[3]</td>";
																		echo "<td>$tem[4]</td>";
																		echo "<td>$tem[5]</td>";
																		echo "<td>$tem[6]</td>";
																		echo "<td>$tem[7]</td>";
																		echo "<td>$tem[8]</td>";
																		echo "<td>$tem[9]</td>";
																		echo "<td>$tem[10]</td>";
																		echo "<td>$tem[11]</td>";
																		echo "<td>$tem[12]</td>";
																																	
																		echo "</tr>";
																}
															}
														echo "</table> <br><br>";
													}
							?>
							
											
													 <tr>
													 <td> <input type='Submit' name='Submit1' value='Delete all'></td>
													 </tr>
						</form>
					</div>
				</div>	
				
				<!---sidebar---->
				<div id="sidebar1">
				<table  height="100" width="0" text-align="left" >  </table>
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

<?php
	mysql_connect("mysql.neq3.com","u148570980_rumi","rr12345");
	mysql_select_db("u148570980_tour");
	
	if(isset($_POST['Submit']))
	{
		$delete = $_POST['Submit'];
				
		$query = mysql_query("select * from p_customer");
		
			 $delete_selected = mysql_query("delete from p_customer  ");
	
	}
	else if(isset($_POST['Submit1']))
	{
		$delete = $_POST['Submit1'];
				
		$query = mysql_query("select * from p_customer_custom");
		
			 $delete_selected = mysql_query("delete from p_customer_custom  ");
	
	}
?>
