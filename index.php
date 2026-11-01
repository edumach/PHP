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
    ["prvni.php", "První", "Použití příkazu echo"],
    ["kostky.php", "Kostky", "Náhodné hodnoty, obrázky"],
    ["karty.php", "Karty", "Náhodné hodnoty, obrázky"],
    ["eshop/index.php", "E-shop", "Formuláře, větvení"],
    ["rovnice/index.php", "Rovnice", "Formuláře, výpočty"],
    ["mobil.php", "Mobil", "Formuláře, větvení"],
    ["dpc/index.php", "DPČ", "Formuláře, větvení"],
    ["pole/mesice.php", "Měsíce", "Pole"],
    ["relace/jmeno_nacti.php", "Jméno", "Relace"],
    ["relace/kostka_s_pameti.php", "Kostka s pamětí", "Relace"]

];

echo "<ol>";

foreach ($menu as $polozka) {
    echo "<li><a href='" . $polozka[0] . "'>" . $polozka[1] . " target=\"_blank\" </a> - ". $polozka[2] . "</li>";
}

echo "</ol>";
?>


</body>
</html>