<html>
  <head>
    <title>Čas slovně </title>
    <meta charset="utf-8">
  </head>
  <body>

<h1>Čas slovně</h1>

<form method="post">
  <p>
    <input type="time" name="cas" required>
    <input type="submit">
  </p>
</form>

<?php
if($_POST) //je něco v POST?
{

$cas = $_POST['cas'];
//$cas="02:02";

$hm = explode(":",$cas);

$hod = $hm[0];
$min = $hm[1];

settype($hod,"integer");
settype($min,"integer");

if($hod == 1) {$hod_str = "hodina";}
elseif($hod > 4 or $hod == 0){$hod_str = "hodin";}
else {$hod_str = "hodiny";}

if($min == 1) {$min_str = "minuta";}
elseif($min > 4 or $min == 0){$min_str = "minut";}
else {$min_str = "minuty";}

echo '<p>' . $cas . '</p>';

echo 'Aktuální čas: ';
echo $hod . ' ' . $hod_str;
echo ' a ';
echo $min . ' ' . $min_str; 

}
else
{
  echo "<p>Aktuální čas nelze zjistit!</p>";
}


?> 

</body>
</html>
