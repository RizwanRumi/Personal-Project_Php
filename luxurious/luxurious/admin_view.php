<?php
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
	<div id="menu">	</div>
</div>
<!-- end header -->
<!-- start page -->
<div id="wrapper">
<div id="wrapper-btm">
<div id="page">
	
	<ul>
		<table border=2 cellspacing=0 cellpadding=5 class="grbg" align="center">
			<form name = "form1" action="login.php" method ="post" >
				<tr class="caption">
					<td colspan=2 align="center"> Admin Login </td>
				</tr>
				<tr>
					<td>Username  </td>
					<td> <input type="text" name="uname" size=20 maxlength=20></td>
				</tr>
				<tr>
					<td> Password </td>
			        <td> <input type="password" name="upass" size=20 maxlength=20></td>
				</tr>
				
				<tr>
				    <td colspan=2 align="center"> <input type="submit" value="Login" </td>
					
				</tr>
			</form>
		</table>
	</ul>	
		<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
</div>
</div>
<!-- start footer -->
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
</div>
</div>

<!-- start footer -->
<?php 
    include('footer.php');
?>
