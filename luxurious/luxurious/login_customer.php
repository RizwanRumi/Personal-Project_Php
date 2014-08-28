 <?php
 require 'lib.php';
 $email = trim($_POST["email"]);
 $pass = trim($_POST["passward"]);
 //$pass = mysql_real_escape_string(md5($pass));
 //echo $pass;
 if(!testcustomer($email,$pass))
 {
   header("Location: booking_customer.php");
   die("");
 }
 
 session_start();
 
 $_SESSION['email'] = $email;
 $_SESSION['userid'] = getid($email,$pass);
 $_SESSION['time'] = time();
 
 if($email )
   header("Location: booking_customer_pg.php");
 else
   die("error");
   // header("Location: main.php");
?>