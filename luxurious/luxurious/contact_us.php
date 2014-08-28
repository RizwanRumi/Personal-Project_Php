<?php
	session_start();
	session_destroy();
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

		
		<?php
		
		mysql_connect("mysql.neq3.com","u148570980_rumi","rr12345");
		mysql_select_db("u148570980_tour");
										
		if(isset ($_POST['p_username']) && isset ($_POST['p_email']) && isset ($_POST['p_address']) && isset ($_POST['p_contact']) && isset($_POST['val'] ) &&  
	                                                          isset($_POST['Day']) && isset($_POST['Month']) && isset($_POST['Year']) && isset($_POST['choose'])  )
			{
					$name = trim($_POST['p_username']);
					$email =trim($_POST['p_email']);
			    	$address = trim($_POST['p_address']);
					$phone = trim ($_POST['p_contact'] );
					$confirm=trim($_POST['val']);
					$day     = $_POST['Day'];
					$month=$_POST['Month'];
					$year = $_POST['Year'];
					$choose=$_POST['choose'];
							
				    $table = "p_customer";
					$query = mysql_query("select * from $table where p_username='$name' ");
		        
           			if(mysql_num_rows($query)>0) die("Please Change your Name & Email ,Cause it is already booked");
			        else {
                              $query = mysql_query("insert into $table VALUES ('$name','$email','$address','$phone','$confirm','$day','$month','$year',$choose ) ");
                   }
				   
				   $flag = 1; 
           }	


	       else if ( isset ($_POST['p_username']) && isset ($_POST['p_email']) && isset ($_POST['p_address']) && isset ($_POST['p_contact']) && isset($_POST['val'] ) &&  isset($_POST['choose1']) && isset($_POST['choose2']) && isset($_POST['choose3'])  && isset($_POST['choose4']) && isset($_POST['choose5'])  && isset($_POST['choose6'])  && isset($_POST['choose7'])  && isset($_POST['choose8'])   )
               {
			       $name = trim($_POST['p_username']);
					$email =trim($_POST['p_email']);
			    	$address = trim($_POST['p_address']);
					$phone = trim ($_POST['p_contact'] );
					$confirm=trim($_POST['val']);
					
					$choose1=trim($_POST['choose1']);
					$choose2=trim($_POST['choose2']);
					$choose3=trim($_POST['choose3']);
			    	$choose4=trim($_POST['choose4']);
					$choose5=trim($_POST['choose5']);
					$choose6=trim($_POST['choose6']);
					$choose7=trim($_POST['choose7']);
					$choose8=trim($_POST['choose8']);
					
							
				    $table = "p_customer_custom";
					$query = mysql_query("select * from $table where p_username='$name' ");
		        
           			if(mysql_num_rows($query)>0) die("Please Change your Name & Email ,Cause it is already booked");
			        else {
                              $query = mysql_query("insert into $table VALUES ('$name','$email','$address','$phone','$confirm','$choose1','$choose2','$choose3','$choose4','$choose5','$choose6','$choose7','$choose8' ) ");
                           }
			   
			   $flag = 2;
			   
               }			   
        ?>
					  
						  
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	         <table align="right">
		 <tr>
		   <td  align="center"> 
	        	    <a href="logoff_customer.php">
					 <input type="Submit"value="Log out">  </a>
		 </td>
        </tr>
		</table>   
   
               
				<?php
						mysql_connect("mysql.neq3.com","u148570980_rumi","rr12345");
				        mysql_select_db("u148570980_tour");
						
					if($flag == 1 ) 
					{	
							$name = trim($_POST['p_username']);
							$email =trim($_POST['p_email']);
							$address = trim($_POST['p_address']);
							$phone = trim ($_POST['p_contact'] );
							$confirm=trim($_POST['val']);
							$day     = $_POST['Day'];
							$month=$_POST['Month'];
							$year = $_POST['Year'];
							$choose=$_POST['choose'];
							
							if(!$name) echo "Please Select Name";
							else if(!$email) echo "Please Select Email";
							else if(!$address) echo "Please Select Address";
							else if(!$phone) echo "Please Select Phone";
							else if(!$confirm) echo "Please Select Confirm mail";
							else if(!$day) echo "Please Select date correctly";
							else if(!$month) echo "Please Select date correctly";
							else if(!$year) echo "Please Select date correctly";
							else if(!$choose) echo "Please Select Package";
							else {
								 
										 echo"  	&nbsp;&nbsp;&nbsp;&nbsp WELCOME    TO  OUR  PACKAGE  OFFER!!!!!!  <br><br>";
												
										$table = "p_customer";
									   
											
											$query =" select * from $table WHERE  p_username = '$name' ";
										
											$res = mysql_query($query);

										 while($tem = mysql_fetch_array($res))						
											{  
													echo "&nbsp;&nbsp;Dear $tem[0] ,<br>";
													echo "     &nbsp;&nbsp;&nbsp;       Your Email is $tem[1] ,  <br>";
													echo "     &nbsp;&nbsp;&nbsp;        Address is $tem[2]  &   <br>";
													echo "	  &nbsp;&nbsp;&nbsp;		phone number is $tem[3]  <br>";
													echo "     &nbsp;&nbsp;&nbsp;      Your going Date is $tem[5] / $tem[6] / $tem[7] .<br>";
													echo "	  &nbsp;&nbsp;&nbsp;       Your Selected package  is $tem[8]<br>";
													echo "     &nbsp;&nbsp;&nbsp;      We Have send email to your Account.<br>";
													echo "     &nbsp;&nbsp;&nbsp;      To Buy Your Ticket Please See Contact Page <br> ";
													echo "  <br>  &nbsp;    ................ Thank You ...............  &nbsp;&nbsp;&nbsp;" ;
													echo "<br> <br>";
											}
									}
					}
					
					else if($flag == 2)
					{
						    if(!$name) echo "Please Select Name";
							else if(!$email) echo "Please Select Email";
							else if(!$address) echo "Please Select Address";
							else if(!$phone) echo "Please Select Phone";
							else if(!$confirm) echo "Please Select Confirm mail";
							else if(!$choose1) echo "Please Select Transport";
						//	else if(!$choose2) echo "Please Select Transport Date";
							//else if(!$choose3) echo "Please Select Transp[ort Time";
							else if(!$choose4) echo "Please Select hotel";
						//	else if(!$choose5) echo "Please Select hotel date";
						//	else if(!$choose6) echo "Please Select hotel stay days";
							else if(!$choose7) echo "Please Select shp";
							else if(!$choose8) echo "Please Select shp date";
							else				
									 {
								 
										
										$table = "p_customer_custom";
									    echo"  	&nbsp;&nbsp;&nbsp;&nbsp WELCOME    TO  OUR Customize  PACKAGE  OFFER!!!!!!  <br><br>";
												
											
											$query =" select * from $table WHERE  p_username = '$name' ";
										
											$res = mysql_query($query);

										 while($tem = mysql_fetch_array($res))						
											{  
													echo "&nbsp;&nbsp;Dear $tem[0] ,<br>";
													echo "     &nbsp;&nbsp;&nbsp;       Your Email is $tem[1] ,  <br>";
													echo "     &nbsp;&nbsp;&nbsp;        Address is $tem[2]  &   <br>";
													echo "	  &nbsp;&nbsp;&nbsp;		phone number is $tem[3]  <br>";
													
													echo "	  &nbsp;&nbsp;&nbsp;       Your Selected Transport package  is $tem[5] &nbsp; Date  $tem[6] &nbsp; Time  $tem[7]<br>";
													echo "	  &nbsp;&nbsp;&nbsp;       Your Selected Hotel  is $tem[8] &nbsp; <br>";
													echo "     &nbsp;&nbsp;&nbsp;   Date  &nbsp; $tem[9] &nbsp; and stay &nbsp; $tem[10]  &nbsp; days <br>";
													echo "	  &nbsp;&nbsp;&nbsp;       Your Selected Ship  is $tem[11] &nbsp; Date  &nbsp; $tem[12]  <br>";
													echo "     &nbsp;&nbsp;&nbsp;      We Have send email to your Account.<br>";
													echo "     &nbsp;&nbsp;&nbsp;      To Buy Your Ticket Please See Contact Page <br> ";
													echo "  <br>  &nbsp;    ................ Thank You ...............  &nbsp;&nbsp;&nbsp;" ;
													echo "<br> <br>";
											}
									}
					
					}
					?>

		
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

