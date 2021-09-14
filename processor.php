<?php
include_once('config.php');
$name =$_POST['name1'];
$email =$_POST['email'];
$pass=$_POST['pass1'];
$hash = shal(md5($pass));
mysql_query($con,"INSERT INTO users('username','email','password')VALUES('$name','$email','#hash')");
echo '<strong>'.$name.'</strong><br>;
echo '<strong>'.$email.'</strong>'<br>;
echo 'This is the password: <strong>'.$pass.'</strong> <br>';
echo 'This is the encrypted password:<strong>'.$hash.'</strong><br>;
