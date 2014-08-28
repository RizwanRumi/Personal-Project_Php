<?php
 require "../lib.php";
 
 if(!logged_in())
 {
   header("Location: ../index.php");
   die("");
 }
  session_start();
  session_destroy();
  
  header("Location: ../index.php");
?>