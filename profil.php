<?php include('header.php'); ?>
<?php include('left.php'); ?>
<?php include('right.php'); ?>
<?php include('functions/pengerank.php'); ?>
<?php include('functions/account_type.php'); ?>

<html>
  <head>
<link rel="stylesheet" type="text/css" href="css/profil.css" />
  </head>
  
  <body style="margin: 0 auto; width: 1200px;">
      
      <center>
          <div class="wrapper">
              <div id="wrap">
                  <div id="banner">
                      <img src="images/test/forside.png">
                  </div>

                  <div id="profilbilde">
                    <img src="images/avatar.png">
                  </div>

                  <div id="nick">
                      <li><a><?php echo $username ?></a></li>
                      <li><?php echo account_type(); ?></li>
                  </div>
                  
                  <div id="info">
                      <li>Pengestatus: <?php pengerank(); ?></li>
                      <li>Rank: <?php echo $rank_array[$rank]; ?></li>
                      <li>Drap: <?php echo $ant_drap; ?></li>
                  </div>
              </div>
          </div>
      </center>
      
  </body>
</html>
