<?php
include("auth.php");
include("functions/rank.php");
?>

<!DOCTYPE html>
<html>
  
  <head>
    <link rel="stylesheet" type="text/css" href="css/right.css" />
      
      
        <?php
            $sql = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' LIMIT 1";
            $result = mysqli_query($con, $sql) or die("Bad query: $sql");
            $row = mysqli_fetch_assoc($result);
            $xp = $row['exp'];
            $rank = $row['rank'];
            $ant_drap = $row['ant_drap'];
            $account_type = $row['account_type'];
        ?>
  </head>
  
  <body>
    
    <div id="right">
        <h3><a href="profil.php"><?php echo $username ?></a></h3>
        <img src="images/avatar.png">
        <li id="red">Rank</li>
        <li><?php echo $rank_array[$rank] ?></li>
        <li id="red">EXP</li>
        <li><?php echo $xp ?></li>
      
      <br/>
        <h2>Forum</h2>
        <li><t id="red">- </t><a href=#>Off-topic</a></li>
        <li><t id="red">- </t><a href=#>In Game</a></li>
        <li><t id="red">- </t><a href=#>Salg og søknad</a></li>
      
      <br/>
        <h2>Oversikt</h2>
        <li><t id="red">- </t><a href="FAQ.php">FAQ</a></li>
        <li><t id="red">- </t><a href=#>Support</a></li>
      
      <br/> <!-- padding i bunden av siden -->
        
    </div>

  </body>
</html>