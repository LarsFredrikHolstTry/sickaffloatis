<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Scandinavian Mafia - Registrer</title>
<link rel="stylesheet" href="css/regoglogin.css" />
</head>
<body>
<img class="hovedbilde" src="images/hovedbilde.png">
<?php
require('connection/db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con, $username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con, $email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con, $password);
    
	$query = "INSERT into `users` (username, password, email)
	VALUES ('$username', '".md5($password)."', '$email')";
	$result = mysqli_query($con, $query);
	
	$krim = "INSERT into `krim` (username)
	VALUES ('$username')";
	mysqli_query($con, $krim);
	if($result){
		echo "<div class='form'>
		<h3>Du ble vellykket registrert!</h3>
		<br/>Trykk her for å logge inn: <a href='logginn.php'>Logg inn</a></div>";
	}
} else {
?>
  
<div class="form" style="text-align:center;">
<h1>Registrering</h1>
<p>Har du allerede en bruker? <a href="logginn.php">logg inn</a></p>
<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Brukernavn" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Passord" required />
<input type="submit" name="submit" value="Register" />
</form>
</div>

<?php 
}
?>

</body>
</html>