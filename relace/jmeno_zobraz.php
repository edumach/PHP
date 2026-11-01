<?php session_start(); ?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zobraz jméno</title>
</head>
<body>

<h1>Zobraz jméno</h1>

<?php
  echo '<p> Uložené jméno: <b>'. $_SESSION['jmeno'] .'</b></p>'; //vypíše nastavenou relaci
?>


<p>
    <a href="jmeno_nacti.php">Zpět na předchozí stránku</a>
</p>

</body>
</html>