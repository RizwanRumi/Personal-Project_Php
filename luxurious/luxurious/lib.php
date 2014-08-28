<?php
function close()
{
 mysql_close();
}
function connect()
{
     $host = "mysql.neq3.com";
     $name = "u148570980_rumi";
     $pass = "rr12345";
     $database = "u148570980_tour";

     $sv = mysql_connect($host,$name,$pass) or die(mysql_error());
     mysql_select_db($database,$sv) or die(mysql_error());
}

function creatuser($uname,$upass,$uad,$uphn,$umail)
{
   connect();
   $uname = mysql_real_escape_string($uname);
   $upass = mysql_real_escape_string(md5($upass));
   $uad = mysql_real_escape_string($uad);
   $uphn = mysql_real_escape_string($uphn);
   $umail = mysql_real_escape_string($umail);
   $table = "user";
   $query = "insert into $table(username,password,address,phone,email) values ('$uname','$upass','$uad','$uphn','$umail');";
   mysql_query($query) or die(mysql_error());
  
}
function createcustomer($name,$email,$pass,$address,$phone)
{
   connect();
   $name = mysql_real_escape_string($name);
   $email = mysql_real_escape_string($email);
   $pass = mysql_real_escape_string(md5($pass));
   $address = mysql_real_escape_string($address);
   $phone = mysql_real_escape_string($phone);
  
   $table = "customer";
   $query = "insert into $table values ('$name','$email','$pass','$address','$phone' ); ";
   mysql_query($query) or die(mysql_error());
   
}

function testuser($uname,$upass)
{
  
  connect();
  $uname = mysql_real_escape_string($uname);
  $upass = mysql_real_escape_string(md5($upass));
  $table = "user";
  $query = "select * from $table where (username='$uname') and (password='$upass');";
  $login = mysql_query($query) or die(mysql_error());
 
  if(mysql_num_rows($login)==1)
    return true;
  else
    return false;  
}

function testcustomer($email,$pass)
{
  connect();
  $c_email = mysql_real_escape_string($email);
  $c_pass = mysql_real_escape_string(md5($pass));
  $table = "customer";
  $query = "select * from $table where (email='$c_email') and (password='$c_pass');";
  $login = mysql_query($query) or die(mysql_error());
 
  if(mysql_num_rows($login)==1)
    return true;
  else
    return false;  
}

function logged_in()
{
  session_start();
  if(!isset($_SESSION["name"])) return false;
  else  return true;
}

function change_password($prv , $new)
{
  session_start();
	connect();
	$prv = mysql_real_escape_string(md5($prv));
	$now = mysql_real_escape_string(md5($new));
	$id = $_SESSION["userid"];
	$table = "user";
    $query1 = "select * from $table where id=$id;";
	$tem = mysql_query($query1) or die("");
	
  if( $dat = mysql_fetch_array($tem))
	{
		$gtprvps = $dat[2];
	}
	
  if($gtprvps != $prv) {close();return false;} 
	$query2 = "update $table set password = '$now' where id=$id;";
	mysql_query($query2);
	
	return true;
}

function getid($uname,$upass)
{
  connect();
  $table = "user";
  $upass = mysql_real_escape_string(md5($upass));
  $query = "select * from $table where (username='$uname') and (password='$upass');";
  $tem = mysql_query($query) or die("");
  
  if( $dat = mysql_fetch_array($tem))
  {
     $id = $dat[0] ;
  }
 
  return $id;
}
?>