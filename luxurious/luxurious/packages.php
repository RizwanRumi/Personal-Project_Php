<?php
    session_start();
    session_destroy();
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
			
			
			<li><a href="<?php echo base_url();?>index.php"> <I> Homepage </I></a></li>
			<li><a href="<?php echo base_url();?>about.php" > <I>  About Luxurious </I></a></li>
			<li><a  href="<?php echo base_url();?>services.php" > <I> Services </I></a></li>
			<li class="current_page_item"><a  href="<?php echo base_url();?>packages.php"> <I> Luxurious Packages </I></a></li>
			<li><a  href="<?php echo base_url();?>booking.php" > <I> Hotels & Travels </I></a></li>
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
<?php
	    mysql_connect("mysql.neq3.com","u148570980_rumi","rr12345");
		mysql_select_db("u148570980_tour");
	
             	$table = "advertise";
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
    </br>
		<h3> Our running packages list is given below : </h3> 
	</br>	
    <!---table----> 
<?php
	    mysql_connect("mysql.neq3.com","u148570980_rumi","rr12345");
	    mysql_select_db("u148570980_tour");
	
	/*--------------------- -------------------------------- For Packages list  -------------------------------------------- */
	
	
	  echo"
					<h2><U>Packages for Tour </u></h2><br>";
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
											echo "</tr>";
									}
								}
							echo "</table> <br><br>";
						}
						
	/* ------------------------------------------------------- End Packages  ----------------------------------------------------*/					

           	echo "<h3>Here are our details cost list for Customize Packages</h3>
				      <br><br>
					  
		              <h2>Transport Cost From Dhaka(Up-Down):</h2>";
			
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
												 </tr>";
										while($tem = mysql_fetch_array($tr_cost))
											{
												{
													echo "<tr>";
													echo "<td>$tem[0]</td>";
													echo "<td>$tem[1]</td>";
													echo "<td>$tem[2]</td>";
													echo "<td>$tem[3]</td>";
													echo "<td>$tem[4]</td>";
													echo "</tr>";
												}
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
									 </tr>";
									while($tem = mysql_fetch_array($hotel_cost))
									{
										
											echo "<tr>";
											echo "<td>$tem[0]</td>";
											echo "<td>$tem[1]</td>";
											echo "<td>$tem[2]</td>";
											echo "<td>$tem[3]</td>";
											echo "<td>$tem[4]</td>";
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
								 </tr>";
							while($tem = mysql_fetch_array($ship_cost))
								{
									{
										echo "<tr>";
										echo "<td>$tem[0]</td>";
										echo "<td>$tem[1]</td>";
										echo "<td>$tem[2]</td>";
										echo "<td>$tem[3]</td>";
										echo "</tr>";
									}
								}
									echo "</table> <br><br>";
						}
 /* --------------------------------- END SHIP ----------------------------------------------------------*/
 ?> 

            <div class="meta">
				<p class="links">Posted on April 5, 2013 by<a href="http://localhost/luxurious/myself.html"> S.M.Rizwan_Rumi<a></a></p>
			</div>
		</div>
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	<div id="sidebar">
		<ul>
			<li id="search">
				<h2>Search</h2>
				<form method="get" action="">
					<fieldset>
					<input type="text" id="s" name="s" value="" />
					<input type="submit" id="x" value="Search" />
					</fieldset>
				</form>
			</li>
			<li>
				<h2>Others</h2>
				<ul>
					<li><a href="#">Games</a></li>
					<li><a href="#">Google Map</a></li>
					<li><a href="#">Marketting</a></li>
					<li><a href="#">Datting</a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Food</a></li>
					<li><a href="#">Weather</a></li>
				</ul>
			</li>
	</div>
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
</div>
</div>

<p style="text-align:left"><a  href="admin_view.php"/> Admin </p>

<!-- start footer -->
<?php 
    include('footer.php');
?>
