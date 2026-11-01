<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Výukový web PHP</title>
</head>
<body>

<h1>Výukový web PHP</h1>

<h2>Menu</h2>

<?php
// 2D pole
$menu = [
    ["prvni.php", "První"],
    ["kostky.php", "Kostky"],
    ["karty.php", "Karty"],
    ["eshop/index.php", "E-shop"],
    ["rovnice/index.php", "Rovnice"],
    ["mobil.php", "Mobil"],
    ["dpc/index.php", "DPČ"],
    ["pole/mesice.php", "Měsíce"],
    ["relace/kostka_s_pameti.php", "Kostka s pamětí"]

];

echo "<ol>";

foreach ($menu as $polozka) {
    echo "<li><a href='" . $polozka[0] . "'>" . $polozka[1] . "</a></li>";
}

echo "</ol>";
?>


</body>
</html>