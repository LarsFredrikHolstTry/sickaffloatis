<?php
include("auth.php");
?>

<!DOCTYPE html>
<html>
  
  <head>
    <link rel="stylesheet" type="text/css" href="css/right.css" />
  </head>
  
  <body>
    
    <div id="right">
        <h3><a href="#"><?php echo $_SESSION['username']; ?></a></h3>
        <img src="images/avatar.png">
        <li id="red">Rank</li>
        <li>Mafia Boss</li>
        <li id="red">EXP</li>
        <li>354 001</li>
      
      <br/>
        <h2>Forum</h2>
        <li><t id="red">- </t><a href=#>Off-topic</a></li>
        <li><t id="red">- </t><a href=#>In Game</a></li>
        <li><t id="red">- </t><a href=#>Salg og søknad</a></li>
      
      <br/>
        <h2>Oversikt</h2>
        <li><t id="red">- </t><a href=#>FAQ</a></li>
        <li><t id="red">- </t><a href=#>Support</a></li>
      
      <br/> <!-- padding i bunden av siden -->
    </div>

  </body>
</html>