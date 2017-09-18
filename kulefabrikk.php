<?php include('header.php'); ?>
<?php include('left.php'); ?>
<?php include('right.php'); ?>

    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="css/style.css" />
        </head>

    <body style="margin: 0 auto; width: 1200px;">
        <center>
            <div id="kulefabrikken">
                <img src="images/handlinger/kulefabrikk.png">
                <form action="kulefabrikk.php" method="post">
                    <a style="color: white">Antall kuler :</a>
                    <input type="text" name="antallkuler" placeholder="" required />
                    <input type="submit" name="submit" value="Kjøp kuler">
                </form>
            </div>
        </center>
    </body>
</html>

<?php

include("auth.php");
require('connection/db.php');

if (isset($_REQUEST['antallkuler'])){
    $sql = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' LIMIT 1";
    $result = mysqli_query($con, $sql) or die("Bad query: $sql");
    $row = mysqli_fetch_assoc($result);

    $antallkuler = $_POST['antallkuler'];
    $penger = $row['money'];
    $kuler = $row['kuler'];
    $prisprkule = 500;  // Pris pr kule

    if (($antallkuler * $prisprkule) > $penger) {
        // ikke nok penger
        echo "<p style='color: #900a0a; text-align: center; margin-top: 280px;'>Du har ikke nok penger til å kjøpe kulene</p>";
    } else {
        // kjøp kuler
        $sql = "UPDATE users SET kuler = ($antallkuler + $kuler) WHERE username='".$_SESSION['username']."'";
        mysqli_query($con, $sql);
        $sql = "UPDATE users SET money = ($penger - ($antallkuler * $prisprkule)) WHERE username='".$_SESSION['username']."'";
        mysqli_query($con, $sql);
        
       echo "<p style='color: #900a0a; text-align: center; margin-top: 280px;'>Du kjøpte " . $antallkuler . " kule(r)!</p>";
        
    }
}
?>
