<?php
//get the q parameter from URL
$q=$_GET["q"];

//find out which feed was selected
if($q=="Full")
  {
                mysql_connect("mysql.neq3.com","u148570980_rumi","rr12345");
				mysql_select_db("u148570980_tour");
						
						/*--------------------- -------------------------------- For Packages list  -------------------------------------------- */
						
						
						  echo"
										<h3><U>Packages for Tour </u></h3><br>";
										$table = "packages";
												
										$query = "select * from $table ";
										$package = mysql_query($query);
																		
										if(mysql_num_rows($package) >= 1)
											{  
												echo "
													<table border='1' cellpadding='10'>
														<tr>
															  <th>Packages No</th>
															  <th>From</th>
															  <th>To</th>
															  <th>Stay</th>
															  <th>Total cost</th>
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
																echo "<td><input type='radio' name='choose' id='val' value='$tem[0]'> </td>";
																echo "</tr>";
														}
													
													}
												echo "</table> <br><br>";
											}
  }
elseif($q=="Custom")
  {
 
						mysql_connect("localhost","root","");
						mysql_select_db("luxurious");								

           	echo "
					 <h1> You can Choose without Packages </h1>	<br> </br>
		              <h2>Transport Cost From Dhaka:</h2>";
			
     /*--------------------------------------------------- For Transport list --------------------------------------------------- */
           
		
 		 

				$table1 = "transport_cost_list";
										
								$query1 = "select * from $table1 ";
								$tr_cost = mysql_query($query1);
																
								if(mysql_num_rows($tr_cost) >= 1)
									{  
											
										echo "
												<table border='1' cellpadding='10'>
												 <tr>
												      <th>No</th>	
													  <th>Name</th>
													  <th>Classic</th>
													  <th>Luxurious</th>
													  <th>Place</th>
													  <th>Select </th>
													  <th>Date</th>
													  <th>Time</th>
												 </tr>";
											
																		
                                            
										while($tem = mysql_fetch_array($tr_cost))
											{
												
													echo "<tr>";
													echo "<td>$tem[0]</td>";
													echo "<td>$tem[1]</td>";
													echo "<td>$tem[2]</td>";
													echo "<td>$tem[3]</td>";
													echo "<td>$tem[4]</td>";
													echo "<td><input type='radio' name='choose1' id='val' value='$tem[0]' > </td>";
													echo "<td><input type='text'   name='choose2'  size='5' > </td>";						
													echo" <td> <input type='text'  name='choose3'  size='5'> </td>";						
							        				echo "</tr>";
												
											}
										echo "</table> <br><br>";
									}
         /*----------------------------------------- END TRANSPORT -------------------------------------------*/			

	/*----------------------------------------- For Hotel------------------------------------------------------------------------*/				
				echo " <h2>Hotel Cost (Per Day & Night):</h2><br>";
		        
		
    				$table2 = "hotel_cost_list";
								
					$query2 = "select * from $table2 ";
					$hotel_cost = mysql_query($query2);
													
					if(mysql_num_rows($hotel_cost) >= 1)
						{  
								
							echo "
									<table border='1' cellpadding='10'>
									 <tr>
									 <th>No</th>	
									  <th>Name</th>
									  <th>Classic</th>
									  <th>Luxurious</th>
									  <th>Place</th>
									  <th>Select Hotel</th>
									  <th>Date</th>
									  <th>Days</th>
									 </tr>";
									while($tem = mysql_fetch_array($hotel_cost))
									{
										
											echo "<tr>";
											echo "<td>$tem[0]</td>";
											echo "<td>$tem[1]</td>";
											echo "<td>$tem[2]</td>";
											echo "<td>$tem[3]</td>";
											echo "<td>$tem[4]</td>";
											echo "	<td><input type='radio' name='choose4' id='val' value='$tem[0]'> </td>";
											echo" <td> <input type='text'  size='5' name='choose5' > </td>";						
											echo" <td> <input type='text'  size='5' name='choose6' > </td>";	
											echo "</tr>";
										
									}
									echo "</table> <br><br>";
						}
         /* -----------------------------------END HOTEL--------------------------------------------*/	

	/*------------------------------------------------- For Ship --------------------------------------------------------------- */						
				echo "
				    <h2>Ship Cost for Seintmertien(Up-Down):</h2>
					<br><br>";
				 
					$table2 = "ship_cost_list";
						
					$query2 = "select * from $table2 ";
					$ship_cost = mysql_query($query2);
													
					if(mysql_num_rows($ship_cost) >= 1)
						{  
								
							echo "
					          		<table border='1' cellpadding='10'>
									 <tr>
                                      <th>Name</th>
									  <th>Classic</th>
									  <th>M-Luxuxious</th>
									  <th>Luxurious</th>
									  <th>Select Ship</th>
									  <th>Date</th>
								 </tr>";
							while($tem = mysql_fetch_array($ship_cost))
								{
									{
										echo "<tr>";
										echo "<td>$tem[0]</td>";
										echo "<td>$tem[1]</td>";
										echo "<td>$tem[2]</td>";
										echo "<td>$tem[3]</td>";
										echo "	<td><input type='radio' name='choose7' id='val' value='$tem[0]' > </td>";
										echo" <td> <input type='text'  size='5' name='choose8' > </td>";						
										echo "</tr>";
									}
								}
									echo "</table> <br><br>";
						}
 /* --------------------------------- END SHIP ----------------------------------------------------------*/
            
  }


?> 