<?php
/*
Po načtení stránky se:
- náhodně vygenerují dvě čísla 1–6,
- zobrazí se čísla i obrázky kostek (jsou v img/kostky),
- vypočítá se součet bodů,
- tlačítko „Házet znovu“ načte stránku znovu (nový hod).
Ukázka: https://php.edumach.cz/kostky.php
*/
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kostky</title>
</head>
<body>






<p>
    <button onClick="window.location.reload();">
        Házet znovu
    </button>
</p>

</body>
</html>