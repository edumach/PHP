<?php
/*
Napište PHP skript, který zobrazí pět náhodných karet z balíčku 52 karet.
- Tlačítkem Rozdej se vygeneruje jiných pět karet.
- Karty budou vedle sebe a v nějaké rozumné velikosti 
  a větším rozestupem (pomocí CSS): 
  https://php.edumach.cz/sample/vlajky.html
- Obrázky karet jsou v adresáři img/karty

Název souboru každého obrázku se skládá ze dvou cifer. 
Stačí vygenerovat náhodné číslo pro první cifru v rozsahu ... (jakém?) 
a pak pro druhé v rozsahu ... (jakém?) a pak je jen "slepit" např. takto: $c1$c2. 
Pamatujte, že PHP generuje HTML kód. Potřebujete pouze vygenerovat 
dvě vhodné cifry, např. $c1 = 5 a $c2 = 3, ne hodnotu "padesát tři":

echo "<img src=\"img/$c1$c2.png\">"

vnořené uvozovky se musí escapovat

Po zpracování vygeneruje PHP překladač toto:

<img src="img/53.png">
*/
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karty</title>
</head>
<body>





</body>
</html>