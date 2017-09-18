<html>
    <head>
        <meta charset="utf-8">
        <title>Scandinavian Mafia - Logg Inn</title>
        <link rel="stylesheet" href="css/regoglogin.css" />
    </head>
    <body>
        <img class="hovedbilde" src="images/hovedbilde.png">
        <?php
        require('connection/db.php');
        session_start();
        // If form submitted, insert values into the database.
        if (isset($_POST['username'])){
            // removes backslashes
            $username = stripslashes($_REQUEST['username']);
            //escapes special characters in a string
            $username = mysqli_real_escape_string($con,$username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con,$password);
            //Checking is user existing in the database or not
            $query = "SELECT * FROM `users` WHERE username='$username'
            and password='".md5($password)."'";
            $result = mysqli_query($con,$query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            if($rows==1){
            $_SESSION['username'] = $username;
            // Redirect user to index.php
            header("Location: template.php");
        } else {
            echo "<div class='form'>
            <h3>Brukernavn/passord er feil</h3>
            <br/>Trykk her for å <a href='logginn.php'>logge inn</a></div>";
        }
    } else {

        ?>

        <div class="form" style="text-align:center;">
            <h1>Logg Inn</h1>
            <form action="" method="post" name="login">
            <input type="text" name="username" placeholder="Brukernavn" required />
            <input type="password" name="password" placeholder="Passord" required />
            <input name="submit" type="submit" value="Logg inn" />
            </form>
            <p>Ikke registrert? <a href='registrer.php'>Registrer her</a></p>
        </div>

        <?php } ?>

    </body>
</html>