<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Měsíc slovně</title>
</head>
<body>

<h2>Měsíc slovně</h2>

<?php
  $mesice = array("leden", "únor", "březen", "duben", "květen", "červen", "červenec", "srpen", "září", "říjen", "listopad", "prosinec");
  $den = date("j");
  $mesic = date("m");
  $mesic_slovy = $mesice[$mesic - 1];
  $rok = date("Y");
  echo "<p>Dnes je " . $den . ". <b>" . $mesic_slovy . "</b> " . $rok . "</p>";

  echo "<hr>";
  
// využijte pole $mesice pro vytvoření rozbalovací nabídky se seznamem měsíců
// ukázka https://php.edumach.cz/mesic.php

?>



</body>
</html>