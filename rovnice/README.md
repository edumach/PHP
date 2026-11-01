# Lineární rovnice

Živá ukázka: [https://php.edumach.cz/linearni_rovnice.php](https://php.edumach.cz/linearni_rovnice.php)

Aplikace si na vstupu vyžádá koeficienty lineární rovnice a vypočítá neznámou *x*. Aplikace zobrazí i postup řešení. Pro vstup je použita [metoda GET](https://www.w3schools.com/html/tryit.asp?filename=tryhtml_input_text).

Aplikace je tvořena **dvěma soubory**:
1. `index.php` - HTML formulář pro zápis dvou čísel
2. `vypocet.php` - odeslaná čísla převezme, vypočítá a vypíše výsledek


## Logika kódu

Obecný tvar lineární rovnice je:

```
ax + b = 0
```

Ukázka obrazovky programu (`index.php`):

<img src="https://www.edumach.cz/img/rovnice_1.png" width="400">

Po odeslání formuláře, kde `a = 3` a `b = 6` (`vypocet.php`):

<img src="https://www.edumach.cz/img/rovnice_2.png" width="400">


Aby formulář v souboru `index.php` "poslal" data ke zpracování souboru `vypocet.php`, stačí do značky `<form>` přidat atribut `target` takto: `<form target="vypocet.php">`. Stačí název souboru, oba jsou ve stejném adresáři `rovnice`. 

Metoda zpracování GET je defaultní (výchozí), jde ale "nařídit" atributem `method`:

```html
<form target="vypocet.php" method="get">
```

Odkaz "Zpět na zadání" je obyčejný hypertextový odkaz na soubor `index.php`.
 
## Úkol

1. Formulář v `index.php` propoj s `vypocet.php`.
2. Dopiš PHP skript v souboru `vypocet.php` podle obrázku. Znak `÷` se zapíše HTML entitou `&divide;`.

## Odevzdání

Funkční aplikaci podle zadání si zkontroluji přímo na serveru TuX. 


