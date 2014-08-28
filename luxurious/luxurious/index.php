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
			<li class="current_page_item"><a href="<?php echo base_url();?>index.php"> <I> Homepage </I></a></li>
			<li><a href="<?php echo base_url();?>about.php" > <I>  About Luxurious </I></a></li>
			<li><a  href="<?php echo base_url();?>services.php" > <I> Services </I></a></li>
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
		<div id="banner">&nbsp;</div>
		<div class="post">
			<h1 class="title">Welcome to my website </h1>
			<div class="entry">
				<p> <img src="images/bottle.jpg" alt="" width="140" height="125" class="left" />
					This is Luxurious Tourism, is a free website from Southeast University released 
					under Creative Commons Attribution project by the Computer Science Engineering 
					Department students. The Project has been measured by CSE department Teacher of
					Md.Ashiqur Rahman. You're free to use this template for both commercial or personal
					use. I only ask that you link back to <a href="<?php echo base_url();?>contact.php" style='color:#5BFFFF'>my contact </a> in some way. Enjoy :)</p>
			</div>
			<div class="meta">
				<p class="links">Posted on April 5, 2013 by <a href="<?php echo base_url();?>contact.php" style='color:#5BFFFF'> S.M.Rizwan_Rumi</a></p>
			</div>
		</div>
		<div class="post">
			<h1 class="title">Luxurious Tourism</h1>
			<div class="entry">
				<p>Luxurious Tourism Bangladesh in a short time is going to offer its customers exiting
				 and adventures tours. Through the various routs both of short and long trips. Its short 
				 trips are one daylong while the long trips will for 4 to 5 days. The trips offered will 
				 be full of enjoyment and thrill where security and privacy will be of the maximum value. 
				 We have been providing quality domestic and International tours for groups and individuals. 
				 Prior to opening Luxurious Tourism Bangladesh, the owner of the company had 7 years of 
				 domestic and international tour management experience. Our courteous staff is comprised of 
				 proficient individuals. We hold special contracts for airfare, hotel and other travel 
				 components that translate into a product of excellent value. </p>
				<p>Qualified, friendly Directors and knowledgeable local guides who are experts on their regions
				 handle our tours. Many can explore Bangladesh’s culture, richness of natural beauty like landscapes, 
				 green lands, banks and ancient tradition along with sound refreshment by a trip offered by 
				 Luxurious Tourism Bangladesh.</p>
			    <p>Our goal is to not only provide you with a vacation, but with memories that that will last a lifetime.</p>
			</div>
			<div class="meta">
				<p class="links">Posted on April 5, 2013 by<a href="<?php echo base_url();?>contact.php"style='color:#5BFFFF'> S.M.Rizwan_Rumi<a></a></p>
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
