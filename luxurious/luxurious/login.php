 <?php
 require 'lib.php';
 $name = trim($_POST["uname"]);
 $pass = trim($_POST["upass"]);
 
 if(!testuser($name,$pass))
 {
   header("Location: index.php");
   die("");
 }
 
 session_start();
 
 $_SESSION['name'] = $name;
 $_SESSION['userid'] = getid($name,$pass);
 $_SESSION['time'] = time();
 
 if($name )
   header("Location: admin/admin.php");
 else
   die("error");
  
?>