<?php
include_once('db.php');
$con = mysqli_connect("$localhost","$root","$root","$bdname");
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL:".mysqli_connect_error();
}else
    echo "";
}
?>