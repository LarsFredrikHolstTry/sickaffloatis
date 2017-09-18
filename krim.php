<?php include('header.php'); ?>
<?php include('left.php'); ?>
<?php include('right.php'); ?>

<?php

include("auth.php");

    $sql = "SELECT * FROM krim WHERE brukernavn = '".$_SESSION['username']."' LIMIT 1";
    $result = mysqli_query($con, $sql) or die("Bad query: $sql");
    $row = mysqli_fetch_assoc($result);
    $krim1 = $row['krim1'];
    $krim2 = $row['krim2'];
    $krim3 = $row['krim3'];
    $krim4 = $row['krim4'];
    $brukernavn = $_SESSION['username'];

?>

<html>
    <head>
        <title>Scandinavian Mafia - Kriminalitet</title>
        <link rel="stylesheet" type="text/css" href="css/krim.css" />
    </head>
  
  <body style="margin: 0 auto; width: 1200px;">
    <center>
      <img src="images/handlinger/kriminalitet.png">
    </center>
      
    <table>
        <thead>
            <tr>
                <th>Handling</th>
                <th>Sjanse</th>
            </tr>
        </thead>
        <tbody>
            <tr onclick="document.write('<?php utforKrim1() ?>');">
                <td>Ran en gammel dame</td>
                <td><?php echo $krim1 ?>%</td>
            </tr>
        </tbody>
        <tbody>
            <tr onclick="document.write('<?php utforKrim1() ?>');">
                <td>Stjel kassa fra nærbutikken</td>
                <td><?php echo $krim2 ?>%</td>
            </tr>
        </tbody>
        <tbody>
            <tr onclick="document.write('<?php utforKrim1() ?>');">
                <td>Svindle bingoen på galleri</td>
                <td><?php echo $krim3 ?>%</td>
            </tr>
        </tbody>
        <tbody>
            <tr onclick="document.write('<?php utforKrim1() ?>');">
                <td>Ran en bank</td>
                <td><?php echo $krim4 ?>%</td>
            </tr>
        </tbody>
    </table>
      <p id="demo"></p>
  </body>
</html>

<?php
    
function utforKrim1() {
    include("auth.php");
    require('connection/db.php');
    $prosent = 1;

    $krim1 = "UPDATE krim SET krim1 = ($prosent + $krim1) WHERE brukernavn= $brukernavn LIMIT 1";
    mysqli_query($con, $krim1);
    echo "test";
}

?>





