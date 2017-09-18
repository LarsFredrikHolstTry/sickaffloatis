<?php
    //Inkluderer DB
    include("auth.php");

    /*Går gjennom brukeren sin database og legger i row, hent ved 
    *   $xp = $row['exp']; 
    * xp er variabelnavnet du finner på og exp er navnet fra databasen.
    */
    $sql = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' LIMIT 1";
    $result = mysqli_query($con, $sql) or die("Bad query: $sql");
    $row = mysqli_fetch_assoc($result);
    $xp = $row['exp'];
    $username = $row['username'];

    //Array som inneholder alle rankene, $rank_array[tallet];
    $rank_array = array("Giovane D'honore", "Guerilla", "Mole", "Sgarrosta", "Executioner", "Capo Decima", "Capo Bastone", "Capo Crimini", "Underboss", "Mafia Boss");

    //De forskjellige rank upsene, må endre i database
    if($xp > 0 && $xp < 1000){
        $sql = "UPDATE users SET rank ='0' WHERE username='".$_SESSION['username']."' LIMIT 1";
        mysqli_query($con, $sql);
    }
    elseif($xp > 1001 && $xp < 10000){
        $sql = "UPDATE users SET rank='1' WHERE username='".$_SESSION['username']."' LIMIT 1";
        mysqli_query($con, $sql);
    }
    elseif($xp > 10001 && $xp < 25000){
        $sql = "UPDATE users SET rank='2' WHERE username='".$_SESSION['username']."' LIMIT 1";
        mysqli_query($con, $sql);
    }
    elseif($xp > 25001 && $xp < 75000){
        $sql = "UPDATE users SET rank='3' WHERE username='".$_SESSION['username']."' LIMIT 1";
        mysqli_query($con, $sql);
    }
    elseif($xp > 75001 && $xp < 100000){
        $sql = "UPDATE users SET rank='4' WHERE username='".$_SESSION['username']."' LIMIT 1";
        mysqli_query($con, $sql);
    }
    elseif($xp > 100001 && $xp < 125000){
        $sql = "UPDATE users SET rank='5' WHERE username='".$_SESSION['username']."' LIMIT 1";
        mysqli_query($con, $sql);
    }
    elseif($xp > 125001 && $xp < 175000){
        $sql = "UPDATE users SET rank='6' WHERE username='".$_SESSION['username']."' LIMIT 1";
        mysqli_query($con, $sql);
    }
    elseif($xp > 175001 && $xp < 225000){
        $sql = "UPDATE users SET rank='7' WHERE username='".$_SESSION['username']."' LIMIT 1";
        mysqli_query($con, $sql);
    }
    elseif($xp > 225001 && $xp < 350000){
        $sql = "UPDATE users SET rank='8' WHERE username='".$_SESSION['username']."' LIMIT 1";
        mysqli_query($con, $sql);
    }
    elseif($xp > 350001 && $xp < 1000000000000000000){
        $sql = "UPDATE users SET rank='9' WHERE username='".$_SESSION['username']."' LIMIT 1";
        mysqli_query($con, $sql);
    }
    
?>