<?php
session_start();
/*
Kostka s pamětí - Využití relací ($_SESSION)
Skript simuluje hod hrací kostkou, který si navíc bude pamatovat počet bodů
z předchozích hodů a také celkový počet hodů.

ÚKOL:
Vaším jediným úkolem bude stávající kód rozšířit o počítadlo hodů tak, 
jako je v této ukázce https://php.edumach.cz/kostka_s_pameti.php (poslední řádek bude tučně)

Cílový stav: 
Cílovým stavem tohoto cvičení bude funkční aplikace včetně počtu hodů*, 
které se bude zobrazovat tučným písmem. Všechna čísla se tlačítkem Reset vynulují.
*/ ?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kostka s pamětí</title>
</head>
<body>
    
<h1>Kostka s pamětí</h1>

<?php
//pokud přišel požadavek na reset
//odstraň všechny proměnné v relaci
if ($_REQUEST["clear"] == "yes") {
	session_unset();
}

//inicializuj proměnné, pokud nejsou 
if(!$_SESSION) {
  $_SESSION['$st_1'] = 0;
  $_SESSION['$st_2'] = 0;
  $_SESSION['$st_3'] = 0;
  $_SESSION['$st_4'] = 0;
  $_SESSION['$st_5'] = 0;
  $_SESSION['$st_6'] = 0;
}

$cislo = rand(1,6); //generuj číslo

//zobraz kostku a inkrementuj mezisoučet
switch($cislo){
  case 1: echo "<img src='../img/kostky/k_1.gif'>"; $_SESSION['$st_1']++; break;
  case 2: echo "<img src='../img/kostky/k_2.gif'>"; $_SESSION['$st_2']++; break;
  case 3: echo "<img src='../img/kostky/k_3.gif'>"; $_SESSION['$st_3']++; break;
  case 4: echo "<img src='../img/kostky/k_4.gif'>"; $_SESSION['$st_4']++; break;
  case 5: echo "<img src='../img/kostky/k_5.gif'>"; $_SESSION['$st_5']++; break;
  case 6: echo "<img src='../img/kostky/k_6.gif'>"; $_SESSION['$st_6']++; break;
}

//vypiš mezivýsledky
echo "<p>Číslo 1: " . $_SESSION['$st_1'] . "<br>";
echo "Číslo 2: " . $_SESSION['$st_2'] . "<br>";
echo "Číslo 3: " . $_SESSION['$st_3'] . "<br>";
echo "Číslo 4: " . $_SESSION['$st_4'] . "<br>";
echo "Číslo 5: " . $_SESSION['$st_5'] . "<br>";
echo "Číslo 6: " . $_SESSION['$st_6'] . "</p>";
?>

<!-- Formulář s tlačítky -->
<form>
<p>
  <input type="button" class="btn btn-success" value="Házet znovu" onclick="window.location.href='index.php?text=kostka'">
  <input type="button" class="btn btn-danger" value="Smazat" onclick="window.location.href='index.php?text=kostka&clear=yes'">
</p>
</form>

</body>
</html>


