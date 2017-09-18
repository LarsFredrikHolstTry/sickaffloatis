<?php

include("connection/db.php");
include("connection/start.php");
if(!isset($_SESSION["username"])) {
header("Location: logginn.php");
exit(); 
}

?>