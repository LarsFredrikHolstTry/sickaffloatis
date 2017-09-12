<?php 

# https://www.phpclasses.org/blog/package/9199/post/3-Smoothly-Migrate-your-PHP-Code-using-the-Old-MySQL-extension-to-MySQLi.html

$con = mysqli_connect("localhost","root","","mafiagamev2");

if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>