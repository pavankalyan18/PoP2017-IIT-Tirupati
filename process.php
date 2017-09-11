<?php
$username =$_POST['username'];
$password =$_POST['password'];

$username =stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("10.21.25.85/phpmyadmin","tcs15b018","tcs15b018");
mysql_select_db("tcs15b018");
$result = mysql_query("select * from users where username = '$username' 
and password ='$password'") or die ("failed to query database".mysql_error());
$row = mysql_fetch_array($result);
if($row['username']==$username && $row['password']== $password){
	
	echo "login suceess welcome".$row['username'];
}else{
	echo "failed to login";
}




?>