<?php
 require "lib.php";
 
 if(!logged_in())
 {
   header("Location: booking_customer.php");
   die("");
 }
  session_start();
  session_destroy();
  
  header("Location:  booking.php");
?>