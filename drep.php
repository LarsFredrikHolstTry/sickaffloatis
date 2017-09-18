<?php include('header.php'); ?>
<?php include('left.php'); ?>
<?php include('right.php'); ?>

<?php
// killing an acocunt
if(isset($_POST['Murder'])){

$nsql = "SELECT name,account_type FROM users WHERE username='". mysqli_real_escape_string($con, $_POST['target'])."'";
$query = mysqli_query($con,$nsql) or die(mysqli_error());
$row = mysqli_fetch_object($query);
$target_name = htmlspecialchars($row->username);
$target_state = htmlspecialchars($row->account_type);


if(empty($_POST['target'])){
    echo "Skriv inn et gyldig nick.";
} else {

if ($target_state != 2 ) { 
    echo "<b style=\"font-size:36px;\">Kan ikke drepe moderator</b>";
} else {

if ($target_state != 3 ) { 
    echo "<b style=\"font-size:36px;\">Kan ikke drepe administrator</b>";
} else {

if($target_state != 0 ){
    echo "Spilleren er allerede død.";
} else {

$result = mysqli_query($con,"UPDATE users SET account_type='0' WHERE name='" . mysqli_real_escape_string($con, $_POST['target']). "'") 
or die(mysqli_error());


echo "Du skjøt kuler på ".$target_name.",".$target_name." døde av skuddene.";

}
}
}
}
}// if isset post murder.
?>

<html>
  <head>
    
  </head>
  
  <body style="margin: 0 auto; width: 1200px;">
      
<form method="post">
    <table width="350" border="0" cellpadding="0" cellspacing="2" class="table">
    <br />
    <table width="350" border="0" cellpadding="0" cellspacing="2" class="table">
      <tr>
        <td colspan="2" align="left" class="header">Drep spiller: </td>
      </tr>
      <tr>
        <td align="center" class="cell">Brukernavn</td>
        <td align="center" class="cell"><input name="target" type="text" class="entryfield" id="target" onFocus="if(this.value=='Name')this.value='';" value="<?php echo htmlspecialchars($_GET['kill']);?>" /></td>
      </tr>
      <tr>
        <td colspan="2" align="right" class="cell"><input name="Murder" type="submit" class="button" id="Murder" value="Drep" onFocus="if(this.blur)this.blur()" /></td>
      </tr>
    <br />
    </table>
    </table>
    </form>   
</body>
</html>
