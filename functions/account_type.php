<?php

function account_type(){

    include("auth.php");

    $sql = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' LIMIT 1";
    $result = mysqli_query($con, $sql) or die("Bad query: $sql");
    $row = mysqli_fetch_assoc($result);
    $account_type = $row['account_type'];

    if($account_type == 0){
        echo '<p style="color: #761019;">Drept</p>';
    }
    elseif($account_type == 1){
        echo 'Bruker';
    }
    elseif($account_type == 2){
        echo '<p style="color: #2e3eda;">Moderator</p>';
    }
    elseif($account_type == 3){
        echo '<p style="color: #229304;">Administrator</p>';
    }
}

function deadoralive(){
    
    include("auth.php");

    $sql = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' LIMIT 1";
    $result = mysqli_query($con, $sql) or die("Bad query: $sql");
    $row = mysqli_fetch_assoc($result);
    $account_type = $row['account_type'];
    
    if ($account_type == 0){
	   echo "Your account was Killed from this site.";
	   exit();
    }
}
?>