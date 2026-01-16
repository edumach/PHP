# Úvod do PHP

Klíčový požadavek: umět napsat znaky: `$ ~ # " ' < > { } [ ] ;`

**PHP jsou skripty vykonávané na straně serveru**

Co to znamená? 
1.	Klient zadá požadavek (URL stránky, např. soubor.php) 
2.	Server PHP skripty zpracuje a převede na HTML kód, HTML kód ponechá beze změny 
3.	Klientovi přijde ze serveru jen výsledek ve formě čistého html. 

<img src="https://php.edumach.cz/lamp.png" width="600">

**POZNÁMKA**: PHP skripty se tak nedají "ukrást", protože ke klientovi dorazí vždy jen čisté html. V tomhle je trochu nevýhoda -- HTML se dá učit "opisováním" a zkoumáním cizích kódů, PHP ne.

## PHP úvod
•	https://www.w3schools.com/php/default.asp
•	https://www.w3schools.com/php/php_intro.asp

## Adresář webu na serveru TuX

Úložiště souborů je v adresáři:  

```
~/www
```
Webový server "čte" právě (a pouze) obsah tohoto adresáře – soubory a adresáře.

Pokud bychom například uložili skript galerie.php do `~/www/cms/fotogalerie`, byl by skript dostupný na URL: 

```
https://tux.panska.cz/~10XPrijmeniJ/cms/fotogalerie/gelarie.php
                              ~/www/cms/fotogalerie/gelarie.php
```

⚠️ Cesta v URL je tedy úplně stejná jako v adresářové struktuře na disku, jen začíná v adresáři `www`. To je pro webový server kořenový adresář (root). Toto si velmi důkladně zapamatujte!!! 

## 💾 První cvičení
Jednoduché cvičení, které však demonstruje, co znamená "skript na straně serveru". 

V adresáři `~/www` vytvoř adresář `first` a v něm soubor `first.php`:

```
$ cd ~/www
$ mkdir first
$ cd first
$ nano first.php
```

a zapiš do něj tento kód:

```php
<p>Toto vypsalo HTML</p>
<?php
  echo "<p>Toto vypsalo PHP</p>";
?>
<p>Toto vypsalo HTML</p>
```
  
Umístění skriptu `first.php` a URL bude: 

```
                              ~/www/first/first.php
https://tux.panska.cz/~10XPrijmeniJ/first/first.php
```

Po načtení stránky se podívej na **zdrojový kód**, který server prohlížeči poslal. 

Edituj soubor a přidej výpočet a výpis zbývajících dnů do konce roku:

```php
<p>Dnes je <?php echo date("z"); ?>. den roku.</p>
<p>Do konce roku zbývá
<?php
  $konec = 365 - date("z");
  echo $konec;
?>
. dnů.</p>
```


☝️ Co si pamatovat
1.	Soubor musí mít příponu `.php`
2.	Skripty se v souboru vkládají do tzv. "PHP ostrůvků" `<?php ... ?>`
3.	Těch tam může být víc.
4.	Příkaz echo podobně jak v bashi vypisuje text.
5.	PHP proměnná začíná znakem `$` 
6.	Stručně řečeno: **PHP generuje HTML kód**

## `index`

Zapisovat vždy do URL název souboru není praktické:

```
https://tux.panska.cz/~10XPrijmeniJ/first/first.php
```

Výhodnější je pojmenovat výchozí soubor `index`. Apache jej pošle automaticky. Pak stačí do URL zapsat jen cestu ke složce:
```
https://tux.panska.cz/~10XPrijmeniJ/first/
```

Uprav název a vyzkoušej:

```
$ cd ~/www/first
$ mv first.php index.php
```

## PHP syntaxe
[https://www.w3schools.com/php/php_syntax.asp](https://www.w3schools.com/php/php_syntax.asp)



