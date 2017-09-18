<?php

    /*   Går gjennom brukeren sin database og legger i row, hent ved 
    *    $money = $row['emoney']; 
    *    money er variabelnavnet du finner på og money er navnet fra databasen.
    */

function pengerank(){
    
    //Inkluderer DB
    include("auth.php");
    
    $sql = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' LIMIT 1";
    $result = mysqli_query($con, $sql) or die("Bad query: $sql");
    $row = mysqli_fetch_assoc($result);
    $money = $row['money'];

    //De forskjellige rank upsene, må endre i database
    if($money > 0 && $money < 2000){
        echo'NAVer';
    }
    elseif($money > 2001 && $money < 15000){
        echo 'Arbeider';
    }
    elseif($money > 15001 && $money < 50000){
        echo 'Langer';
    }
    elseif($money > 50001 && $money < 100000){
        echo 'Litt rik';
    }
    elseif($money > 100001 && $money < 100000){
        echo 'Gambler';
    }
    elseif($money > 100001 && $money < 125000){
        echo 'Aksjemegler';
    }
    elseif($money > 125001 && $money < 175000){
        echo 'Millionær';
    }   
    elseif($money > 175001 && $money < 225000){
        echo 'Multimillionær';
    }
    elseif($money > 225001 && $money < 3500000000000000000000000000){
        echo 'Oljesjeik';
    }
}
?>

