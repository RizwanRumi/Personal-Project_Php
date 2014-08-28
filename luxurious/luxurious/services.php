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
			<li ><a href="<?php echo base_url();?>about.php" > <I>  About Luxurious </I></a></li>
			<li class="current_page_item"><a  href="<?php echo base_url();?>services.php" > <I> Services </I></a></li>
			<li><a  href="<?php echo base_url();?>packages.php"> <I> Luxurious Packages </I></a></li>
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
		
		<div class="post">
		    <p style="text-align:center"><strong>OUR CORE SERVICES</strong><br/>
                         <strong>By having dedicated professionals, every traveler’s needs.</strong><br />
                         <strong>The following are our core services</strong></p>
			<p style="text-align:center"><img src="images/service/biman.jpg" width="584" height="95"  alt="Cattering banner" /><br />
						  Worldwide Airlines Ticketing Reservation<br />
					  VIP Aircraft and Helicopter Charter</p>			 
			<p style="text-align:center"><strong>OUR TRANSPORTATION</strong><br />
                <img width="230" height="132" src="images/service/car_1.jpg" ><img width="230" height="132" src="images/service/car_2.jpg" > </p>
			<p style="text-align:center"><img width="230" height="132" src="images/service/bus_1.jpg" ><img width="230" height="132" src="images/service/bus_2.jpg" > <br />
                            <strong>EVENT</strong><br />
                            <strong><img width="230" height="132" src="images/service/event_1.jpg" /><strong><img width="230" height="132" src="images/service/event_2.jpg" /></strong></strong><br />
					  </p>
			<p style="text-align:left">Meeting and Incentive Planning<br />
						  Event &amp; Conference Coordination and  Management<br />
						  Travel Coordination and Management<br />
						  Transportation  Coordination and Management<br />
						  Interpreter Services<br />
						  Multilingual  Professional Guide<br />
						  Media Research &amp;  Filming <br />
                          <strong><B>Note: </b></strong>Whether  you are planning Conference or Corporate event, Business Meeting, Corporate Tour, Sporting  Event, Family reunion or a fun group getaway, Luxurious Tourism Bangladesh makes planning group trips easy with special group amenities,  guaranteed services and customized rates, so all you have to do is relax and  have a great time. Simply contact an Luxurious tourism Bangladesh by an online or  by phone to start planning you group event. <br />
						  We  have organized School , College & University trips, Lusurious Tourism Bangladesh already  arrange a lot of International School and College program.</p>
						<p ><a href="images/service/HotelBooking.pdf">Download </a> Our Hotel List  &  Choose The Perfect Place For You...........</p>
				 
			
			<div class="meta">
				<p class="links">Posted on April 5, 2013 by <a href="<?php echo base_url();?>contact.php" style='color:#5BFFFF'> S.M.Rizwan_Rumi</a></p>
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

<?php 
    include('footer.php');
?>

