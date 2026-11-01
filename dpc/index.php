
<!DOCTYPE html>
<html lang="cs">
<head>
  <meta charset="UTF-8">
  <title>Kalkulačka mzdy brigádníka</title>
  <style>
    body {
      max-width: 600px;
      padding: 1em;
      margin: auto;
	  font-family: sans-serif;
    }
  </style>
</head>
<body>
<h1>Kalkulačka mzdy brigádníka</h1>
<p>
	Mzda se vypočítává z odpracované hodiny (tu si skript převezme formulářem).
	Hodinová sazba je 100 Kč za hodinu, což je hrubá mzda brigádníka.
	Daň z&nbsp;příjmů (co platíme státu) je 15 % a tu platíme vždy. 
	V případě, že příjem přesáhne 4000 Kč, tak se z hrubého příjmu bude
	odečítat ještě zdravotní (4,5 %) a sociální pojištění (6,5 %).
</p>        

<hr>

<form method="post">
  <p>
    <input type="number" placeholder="Odpracované hodiny" min="1" name="h" required>
    <input type="submit" value="Vypočítat">
  </p>
</form>

<?php
if ($_POST) // pokračuje, pokud je něco v $_POST (TRUE), jinak se nic neděje (FALSE)
{
  $hodiny = $_POST["h"]; // v proměnné $hodiny je načtené číslo z formuláře 
  // níže bude kód i výstup






  // konec PHP skriptu
}
?>

</body>
</html>
