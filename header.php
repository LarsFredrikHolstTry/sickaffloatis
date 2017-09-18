<?php
include("auth.php");    
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="css/header.css" />
    <?php
        $sql = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' LIMIT 1";
        $result = mysqli_query($con, $sql) or die("Bad query: $sql");
        $row = mysqli_fetch_assoc($result);
        $hp = $row['health'];
        $money = $row['money'];
        $kuler = $row['kuler'];
        $vapen = $row['vapen'];
        $bil = $row['bil'];
    ?>
</head>

    <body background="images/">

        <div id="header">
            <img src="images/logo.png">
        </div>

        <div id="infoheader">
            <a href="#">Helse: <?php echo $hp ?>%</a>
            <a href="#">Penger ute: <?php echo $money ?>,-</a>
            <a href="#">Våpen: <?php echo $vapen ?></a>
            <a href="#">Bil: <?php echo $bil ?></a>
            <a href="#">Kuler: <?php echo $kuler ?> stk</a>
            <a href="loggut.php" id="red">Logg ut</a>
        </div>

    </body>
</html>