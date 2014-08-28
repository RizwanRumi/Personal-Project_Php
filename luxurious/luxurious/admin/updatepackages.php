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
<div id="wrapper1">
<div id="wrapper-btm1">

		<div id="page2">
				<div id="page2-bg-top">
					<div id="content2">
					
					 	<table  height="0" width="0"> </table>
						
						<form method="post" action="advertise.php" name="form" id="form">
						
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
						
						<form method="post" action="create_package.php" name="form" id="form">
						
						
								<td><h3 align="center"> Change Packages </h3> <br>
								<h4 align="center"><U>To Create Packages </u> </h4></td>
								<table  height="0" width="0"  align="center" > 						
								<tr >
									<td > <h4>Package</h4> 
										<select name="package_no">
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
										<option>6</option>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										</select>
									</td>
								
									<td><h4 align="center">From</h4>
									    <select name="from">
										<option>Dhaka</option>
										<option>Chittagong</option>
										<option>Cox`s Bazar</option>
										<option>Rangamati</option>
										<option>Sylhet</option>
										<option>Khulna</option>
										<option>Rajshahi</option>
									    </select>
                                    </td>
																
									 <td><h4 align="center">To</h4>
										<select name="to">
										<option>Dhaka</option>
										<option>Chittagong</option>
										<option>Cox`s Bazar</option>
										<option>Cox`s Bazar & seintmartine</option>
										<option>Rangamati</option>
										<option>Sylhet</option>
										<option>Khulna</option>
										<option>Rajshahi</option>
									    </select>
									</td>
									<td><h4 align="center">Stay</h4>
									   <input type="text" name="stay" size=12> </td>
									<td><h4 align="center">Total Cost</h4>
									   <input type="text" name="cost" size=12></td>
								</tr>
							    </table>
								<table  height="0" width="0"  align="center" > 						
									<tr align="center">
										<td >
											<input type="submit" value="Submit" >
											<input type="submit" value="Reset" onclick="return reset()">
											
										</td>
									</tr>
								</table>	
							</br>
						</form>	
						
						
						<form method="post" action="delete_select_package.php" name="form" id="form">	
							<table  height="0" width="0" align="center"> 	
								<tr align="center">
									<td  > <h4 align="center"><U>TO Delete Selected Packages </U></h4>
										 <h4>Package</h4> 
											<select name="package_no_del">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
												</select>
																	
										<input type="submit" value="Delete" name="submit">
									</td>
								</tr>
							</table>	
						</form>
						
						
						<form method="post" action="delete_all_packages.php" name="form" id="form">	
							<table  height="0" width="0" align="center"> 	
								<tr align="center">
									<td  align="center" > <h4 align="center"><U>To Delete All Packages </U></h4> 
										<input type="text" name="yes" size=5>
										<input type="submit" value="Delete all">
									</td>
								</tr>
							</table>
						</form>

						<form method="post" action="update_selected_packages.php" name="form" id="form">	
							<table  height="0" width="0"  align="center" > 						
								<tr align="center">
                                
									<td> <h4 align="center"><U> To UPDATE Package </U></h4>
										 
									<table  height="0" width="0"> 						
										<tr>
											<td> <h4>Package</h4> 
												<select name="package_no_upd">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												</select>
											</td>
										
											<td><h4 align="center">From</h4>
												<select name="from_upd">
												<option>Dhaka</option>
												<option>Chittagong</option>
												<option>Cox`s Bazar</option>
												<option>Rangamati</option>
												<option>Sylhet</option>
												<option>Khulna</option>
												<option>Rajshahi</option>
												</select>
											</td>
																		
											 <td><h4 align="center">To</h4>
												<select name="to_upd">
												<option>Dhaka</option>
												<option>Chittagong</option>
												<option>Cox`s Bazar</option>
												<option>Cox`s Bazar & Seintmartine</option>
												<option>Rangamati</option>
												<option>Sylhet</option>
												<option>Khulna</option>
												<option>Rajshahi</option>
												</select>
											</td>
											<td><h4 align="center">Stay</h4>
											   <input type="text" name="stay_upd" size=12> </td>
											<td><h4 align="center">Total Cost</h4>
											   <input type="text" name="cost_upd" size=12></td>
										</tr>
									</table>
								</tr>
							</table>
							
							<table  height="0" width="0"  align="center" > 						
								<tr align="center">
							      <td>								
									<input type="submit" value="Update" name="Update">
									<input type="submit" value="Reset" onclick="return reset()">
								  </td>
								</tr>
							</table>
						</form>
						
						
							<br><br>
							
							
		                <form method="post" action="create_transport.php" name="form" id="form">	
							<td><h3 align="center"> Change Transport Cost </h3> <br>
								<h4 align="center"><U>To Create Transport Cost </u> </h4></td>
								<table  height="0" width="0"  align="center" > 						
								<tr >
								    <td> <h4 align="center">No.</h4>   
										<select name="trans_no">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
												</select>
                                     </td>										
									<td > <h4>Transport</h4> 
										 <select name="transport">
										 <option>Air lines</option>
										<option>Bus</option>
										<option>Car</option>
										</select> 
										
									</td>
								
									<td><h4 align="center">Classic</h4>
									     <input type="text" name="classic" size=12> 
                                    </td>
																
									 <td><h4 align="center">Luxurious</h4>
										 <input type="text" name="luxury" size=12> 
									</td>
									<td><h4 align="center">Place</h4>
												<select name="place">
												<option>Dhaka</option>
												<option>Chittagong</option>
												<option>Cox`s Bazar</option>
												<option>Rangamati</option>
												<option>Sylhet</option>
												<option>Khulna</option>
												<option>Rajshahi</option>
												</select>
											</td>
																	
								</tr>
							    </table>
								<table  height="0" width="0"  align="center" > 						
									<tr align="center">
										<td >
											<input type="submit" value="Submit" >
											<input type="submit" value="Reset" onclick="return reset()">
											
										</td>
									</tr>
								</table>	
						</form>	
								
						<form method="post" action="update_transport.php" name="form" id="form">			
							</tr></br>
							<h4 align="center"><U>To Update Cost </u> </h4>
								<table  height="0" width="0"  align="center" > 						
								<tr >
								    <td> <h4 align="center">No.</h4>   
										<select name="trans_no_upd">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
												</select>
                                     </td>		
									 
									<td > <h4>Transport</h4> 
										<select name="transport_upd">
										<option>Air lines</option>
										<option>Bus</option>
										<option>Car</option>
										</select>
									</td>
								
									<td><h4 align="center">Classic</h4>
									     <input type="text" name="classic_upd" size=12> 
                                    </td>
																
									 <td><h4 align="center">Luxurious</h4>
										 <input type="text" name="luxury_upd" size=12> 
									</td>
									<td><h4 align="center">Place</h4>
												<select name="place_upd">
												<option>Dhaka</option>
												<option>Chittagong</option>
												<option>Cox`s Bazar</option>
												<option>Rangamati</option>
												<option>Sylhet</option>
												<option>Khulna</option>
												<option>Rajshahi</option>
												</select>
											</td>
								</tr>
							    </table>
								<table  height="0" width="0"  align="center" > 						
									<tr align="center">
										<td >
											<input type="submit" value="Submit" >
											<input type="submit" value="Reset" onclick="return reset()">
											
										</td>
									</tr>
								</table>	
							</tr></br>
						</form>	
						
                        <form method="post" action="delete_transport.php" name="form" id="form">									
							<h4 align="center"><U>To Delete Transport </u> </h4>
								<table  height="0" width="0"  align="center" > 						
								<tr >
									<td > <h4>Transport</h4> 
										<select name="transport_del">
										<option>Air lines</option>
										<option>Bus</option>
										<option>Car</option>
										</select>
									</td>
								
									<td><h4 align="center">No.</h4>   
										<select name="trans_no_del">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
                                     </td>		
								</tr>
							    
							</table>
							<table  height="0" width="0"  align="center" > 						
								<tr align="center">
									<td>								
										<input type="submit" value="Delete" name="submit">
									</td>
								</tr>
							</table>
							</form>
							<br>
							
							
							<form method="post" action="create_hotel.php" name="form" id="form">						
							<td><h3 align="center"> Change Hotel Cost </h3> <br>
								<h4 align="center"><U>To Create Hotel Cost </u> </h4></td>
								<table  height="0" width="0"  align="center" > 						
								<tr >
								    <td ><h4 align="center">No.</h4>   
										<select name="hotel_no">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
                                     </td>		
									<td > <h4 align="center">Hotel</h4> 
										<input type="text" name="hotel_name" size=12> 
									</td>
								
									<td><h4 align="center">Classic</h4>
									     <input type="text" name="hotel_classic" size=12> 
                                    </td>
																
									 <td><h4 align="center">Luxurious</h4>
										 <input type="text" name="hotel_luxury" size=12> 
									</td>
									<td><h4 align="center">Place</h4>
												<select name="hotel_place">
												<option>Dhaka</option>
												<option>Chittagong</option>
												<option>Cox`s Bazar</option>
												<option>Rangamati</option>
												<option>Sylhet</option>
												<option>Khulna</option>
												<option>Rajshahi</option>
												</select>
									</td>
								</tr>
							    </table>
								<table  height="0" width="0"  align="center" > 						
									<tr align="center">
										<td >
											<input type="submit" value="Submit" >
											<input type="submit" value="Reset" onclick="return reset()">
											
										</td>
									</tr>
								</table>	
								</form>
								<br>
								
								
								<form method="post" action="update_hotel.php" name="form" id="form">					
								<h4 align="center"><U>To Update Cost </u> </h4>>
								<table  height="0" width="0"  align="center" > 						
								<tr >
								     <td ><h4 align="center">No.</h4>   
										<select name="hotel_no_upd">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
										</select>
                                     </td>		
									<td > <h4 align="center">Hotel</h4> 
										<input type="text" name="hotel_upd" size=12> 
									</td>
								
									<td><h4 align="center">Classic</h4>
									     <input type="text" name="h_classic_upd" size=12> 
                                    </td>
																
									 <td><h4 align="center">Luxurious</h4>
										 <input type="text" name="h_luxury_upd" size=12> 
									</td>
									<td><h4 align="center">Place</h4>
												<select name="h_place_upd">
												<option>Dhaka</option>
												<option>Chittagong</option>
												<option>Cox`s Bazar</option>
												<option>Rangamati</option>
												<option>Sylhet</option>
												<option>Khulna</option>
												<option>Rajshahi</option>
												</select>
									</td>
								</tr>
							    </table>
								
								<table  height="0" width="0"  align="center" > 						
									<tr align="center">
										<td >
											<input type="submit" value="Submit" >
											<input type="submit" value="Reset" onclick="return reset()">
											
										</td>
									</tr>
								</table>	
								</form>
						
							<form method="post" action="delete_hotel.php" name="form" id="form">					
				
							<h4 align="center"><U>To Delete Hotel </u> </h4>
								<table  height="0" width="0"  align="center" > 						
									<tr>
									    <td ><h4 align="center">No.</h4>   
											  <select name="hotel_no_del">
												<option>1</option>
												<option>2</option>
												<option>3</option>
												<option>4</option>
												<option>5</option>
												<option>6</option>
												<option>7</option>
												<option>8</option>
												<option>9</option>
												<option>10</option>
											</select>
                                       </td>		
										<td > <h4>Hotel</h4> 
											<input type="text" name="hotel_del" size=12> 
										</td>
									</tr>
								</table>
								<table  height="0" width="0"  align="center" > 						
									<tr align="center">
										<td>								
											<input type="submit" value="Delete" name="submit">
										</td>
									</tr>
								</table>
							</form>
							<br>
										
							<h3 align="center"> Change Ship Cost </h3>
							<form method="post" action="create_ship.php" name="form" id="form">	
							<td><h4 align="center"><U>To Create Ship Cost </u> </h4></td>
								<table  height="0" width="0"  align="center" > 						
								<tr >
								   
									<td > <h4 align="center">Ship Name</h4> 
										<input type="text" name="ship_name" size=12> 
									</td>
								
									<td><h4 align="center">Classic</h4>
									     <input type="text" name="ship_classic" size=12> 
                                    </td>

									<td><h4 align="center">M-Luxurious</h4>
									     <input type="text" name="ship_m_luxury" size=12> 
                                    </td>
									
									 <td><h4 align="center">Luxurious</h4>
										 <input type="text" name="ship_luxury" size=12> 
									</td>
									
								</tr>
							    </table>
								<table  height="0" width="0"  align="center" > 						
									<tr align="center">
										<td >
											<input type="submit" value="Submit" >
											<input type="submit" value="Reset" onclick="return reset()">
											
										</td>
									</tr>
								</table>	
								</form>
								<br>
								<form method="post" action="update_ship.php" name="form" id="form">	
								<h4 align="center"><U>To Update Cost </u> </h4></td>
								<table  height="0" width="0"  align="center" > 						
								<tr >
									<td > <h4>Ship</h4> 
										<input type="text" name="ship_name_upd" size=12> 
									</td>
								
									<td><h4 align="center">Classic</h4>
									     <input type="text" name="classic_ship_upd" size=12> 
                                    </td>
									
                                    <td><h4 align="center">M-Luxurious</h4>
									     <input type="text" name="m_luxury_ship_upd" size=12> 
                                    </td>
									
									 <td><h4 align="center">Luxurious</h4>
										 <input type="text" name="luxury_ship_upd" size=12> 
									</td>
									
								</tr>
							    </table>
								<table  height="0" width="0"  align="center" > 						
									<tr align="center">
										<td >
											<input type="submit" value="Submit" >
											<input type="submit" value="Reset" onclick="return reset()">
											
										</td>
									</tr>
								</table>	
							</form>
							<form method="post" action="delete_ship.php" name="form" id="form">	
							<h4 align="center"><U>To Delete Ship </u> </h4>
								<table  height="0" width="0"  align="center" > 						
									<tr>
										<td > <h4>Ship Name</h4> 
											<input type="text" name="ship_del" size=15> 
										</td>
									</tr>
								</table>
								<table  height="0" width="0"  align="center" > 						
									<tr align="center">
										<td>								
											<input type="submit" value="Delete" name="submit">
										</td>
									</tr>
								</table>
							<br>
							
						</form>
                    
					
					</div>
				</div>
				
				
     			<!---sidebar---->
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

<!-- start footer -->
<?php 
    include('admin_footer.php');
?>
