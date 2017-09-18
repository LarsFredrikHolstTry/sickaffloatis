<!--


KUN EN TEST-FIL


-->

<?php include('header.php'); ?>
<?php include('left.php'); ?>
<?php include('right.php');

include("auth.php");

$sql = "SELECT * FROM krim WHERE username = '".$_SESSION['username']."' LIMIT 1";
$result = mysqli_query($con, $sql) or die("Bad query: $sql");
$row = mysqli_fetch_assoc($result);
$username = $row['username'];
?>

<html>
  <head>
    
  </head>
  
  <body style="margin: 0 auto; width: 1200px;">
      
    
<form id="form1" name="form1" method="post" action=""> 
<table width="60%" border="0" cellpadding="0" cellspacing="22" class="table">
  <tr>
    <td class="header">Krim</td>
    <td class="header">Ventetid</td>
  </tr>
  <tr>
    <td class="cell"><input type="radio" name="radiobutton" id="radio" value="1" />
    Ran en gammel dame </td>
    <td class="cell"><?php if ($last1 <= 0){ echo "<font color=lightgreen>Available</font>"; } else { echo crimemaketime($timeleft1); } ?></td>
  </tr>
  <tr>
    <td class="cell"><input type="radio" name="radiobutton" id="radio2" value="2" />
      Stjel kassa fra nærbutikken </td>
    <td class="cell"><?php if ($last2 <= 0){ echo "<font color=lightgreen>Available</font>"; } else { echo crimemaketime($timeleft2); } ?></td>
  </tr>
  <tr>
    <td class="cell"><input type="radio" name="radiobutton" id="radio3" value="3" />
    Svindle bingoen på galleri </td>
    <td class="cell"><?php if ($last3 <= 0){ echo "<font color=lightgreen>Available</font>"; } else { echo crimemaketime($timeleft3); } ?></td>
  </tr>
  <tr>
    <td class="cell"><input type="radio" name="radiobutton" id="radio4" value="4" />
    Ran en bank </td>
    <td class="cell"><?php if ($last4 <= 0){ echo "<font color=lightgreen>Available</font>"; } else { echo crimemaketime($timeleft4); } ?></td>
  </tr>
  <tr>
    <td colspan="2" align="right" class="cell"><input type="submit" name="utfor" id="utfor" value="utfor" /></td>
  </tr>
</table>
</form>
    
  </body>
</html>


<?php

if ($_POST['utfor']){
    $radiobutton=$_POST['radiobutton'];

if ($radiobutton == "1"){
    $krim_chance = rand(1,10);
    $krimtime1 = 10;
    $krim_exp = rand(1,10);
    $krim_money =rand(100,500);
    $timewait1=time()+ $krimtime1;
    $sql2="SELECT * from krim WHERE username='$username'";
    $result2=mysqli_query($con, $sql2);
        while($rows2=mysqli_fetch_array($result2)){
        $timeleft1= $rows2['krim1'];
        $available1= $rows2['krim1a'];
        $last1 = $timeleft1 - time();
            if ($available1 == 1) {
            echo "You need to wait be fore you can do this krim";

            } elseif ($krim_chance == 2){
                echo "Klarer du ikke banke en gammel dame? Patetisk.";
                
                $result = mysqli_query($con, "UPDATE krim SET krim1a='1', krim1='$timewait1' WHERE username='$username'") or die(mysqli_error($con));
                
            } else {
                $result = mysqli_query($con, "UPDATE krim SET krim1a='1', krim1='$timewait1' WHERE username='$username'") or die(mysqli_error($con));
                
                $result = mysqli_query($con, "UPDATE users SET exp=exp+'$krim_exp', money=money+'$krim_money' WHERE username='$username'") or die(mysqli_error($con));
                
                echo "Du banket livskiten ut av den gamle dama og fikk med deg $krim_money,-";
            }
        }
    }
}

        $sql2="SELECT * from krim WHERE username='$username'";
        $result2=mysqli_query($con, $sql2);

        while($rows2=mysqli_fetch_array($result2)){
        $timeleft1= $rows2['krim1'];
        $timeleft2= $rows2['krim2'];
        $timeleft3= $rows2['krim3'];
        $timeleft4= $rows2['krim4'];
        $last1 = $timeleft1 - time();
        $last2 = $timeleft2 - time();
        $last3 = $timeleft3 - time();
        $last4 = $timeleft4 - time();
    }

if($last1 <= 0){
    $result = mysqli_query($con, "UPDATE krim SET krim1a='0', krim1='' WHERE username='$username'")
    or die(mysqli_error($con));
}

if($last2 <= 0){
    $result = mysqli_query($con, "UPDATE krim SET krim2a='0', krim2='' WHERE username='$username'")
    or die(mysqli_error($con));
}

if($last3 <= 0){
    $result = mysqli_query($con, "UPDATE krim SET krim3a='0', krim3='' WHERE username='$username'")
    or die(mysqli_error($con));
}

if($last4 <= 0){
    $result = mysqli_query($con, "UPDATE krim SET krim4a='0', krim4='' WHERE username='$username'")
    or die(mysqli_error($con));
}


function crimemaketime($until){

   $now = time();
   $difference = $until - $now;

   $days = floor($difference/86400);
   $difference = $difference - ($days*86400);

   $hours = floor($difference/3600);
   $difference = $difference - ($hours*3600);

   $minutes = floor($difference/60);
   $difference = $difference - ($minutes*60);

   $seconds = $difference;
   $output = "$minutes Minutes and $seconds Seconds";

   return $output;
   
}

?>
