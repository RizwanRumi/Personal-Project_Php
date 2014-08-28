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
			function check(){
				var name = document.form1.uname.value;
				if(!name){
					alert("No Name");
					return false;
				}
				var pass = document.form1.upass.value;
				if(!pass){
					alert("No Name");
					return false;
				}
				var address = document.form1.address.value;
				if(!address){
					alert("No Address");
					return false;
				}
				var phone = document.form1.phone.value;
				if(!phone){
					alert("No Contact");
					return false;
				}
				var email = document.form1.email.value;
				if(!email){
					alert("No email");
					return false;
				}
				if(email){
					var a = 0;
					var dot = 0;
					for(i=0; i<email.length;i++){
						if(email[i]=='@') a = a+1;
						if(email[i]=='.') dot = dot+1;						
					}
					if(a != 1||dot != 1){
						alert("Invalid Email");
						return false;
					} 
				}
												
				return true;
			}
			
			function reset(){
				document.getElementById("form1").reset();
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
<div id="wrapper">
<div id="wrapper-btm">

		<div id="page1">
				<div id="page1-bg-top">
					<div id="content1">
					<table  height="100" width="0"> </table>
						<table align="center">
							<form name = "form1" action = 'deleteuser.php' method='post'>
								<tr>
									<td>To Delete Prev. User: <input type='submit' value = 'Delete'/></td>
								</tr>
							</form>
							
							<form name = "form1" action = 'creatuser.php' method='post'>
								<tr>
									<td>Username : </td>
								</tr>
								<tr>
									<td><input type='text' name='uname' size='30'/></td>
								</tr>
								<tr>
									<td>Password :</td>
								</tr>
								<tr>
									<td><input type='password' name='upass' size='30'/></td>
								</tr>
								<tr>
									<td>Address:</td>
								</tr>
								<tr>
									<td><input type='text' name='address' size='30'/></td>
								</tr>
								<tr>
									<td>Phone No:</td>
								</tr>
								<tr>
									<td><input type='text' name='phone' size='30'/></td>
								</tr>
								<tr>
									<td>Email :</td>
								</tr>
								<tr>
									<td><input type='text' name='email' size='30'/></td>
								<tr>
								<tr>
									<td><input type='submit' value = 'Creat' onclick='return check()'/><input type='reset' value = 'Reset' onclick='return reset()'/></td>
								</tr>
							</form>
						</table>	
					</div>
				</div>
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
