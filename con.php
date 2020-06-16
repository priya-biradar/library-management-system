<?php
$host = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect('localhost','root','');
if(!$con)
 {       
 die("problems connecting to DB.".mysqli_error());
}
?>