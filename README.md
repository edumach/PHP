# Úvod do PHP

---

## TEORIE

### Dynamický web

Po obrovském rozmachu internetu a webových stránek se hledaly způsoby, jak do stránek přidávat nějakou **dynamickou funkčnost**. Tyto pokusy došly postupem času tak daleko, že v dnešní době jsme schopni dosáhnout toho, aby se webová stránka chovala úplně stejně, jako desktopová aplikace. Takové webové stránce se říká **webová aplikace**.

Webové aplikace fungují tak, že se klient zeptá serveru na určitý dokument. Na serveru ale běží tzv. CGI skript, což je program, který dokáže vygenerovat do stránky to, co uživatel požaduje. Stránka tedy na serveru již neleží (zčásti nebo zcela), ale je dynamicky vytvářena podle toho, co uživatel chce.

Právě PHP je nejrozšířenějším skriptovacím jazykem pro programování dynamických internetových stránek a webových aplikací.


### Jak fungují dynamické stránky

<img src="https://php.edumach.cz/lamp.png" width="600">

1. Klient požádá server o soubor `stranka.php`, který je uložen na serveru.
2. Server před odesláním klientovi pošle PHP kódy ke zpracování.
3. Výsledkem jsou kusy statického HTML kódu.
4. Server těmito částmi nahradí původní PHP ostrůvky a až poté soubor odešle klientovi.

Klient obdrží soubor `stranka.php`, který obsahuje **vždy pouze statický HTML kód**.

**POZNÁMKA**: PHP skripty se tak nedají "ukrást", protože ke klientovi dorazí vždy jen čisté html. V tomhle je trochu nevýhoda -- HTML se dá učit "opisováním" a zkoumáním cizích kódů, PHP ne.


### Učební zdroje

- https://www.w3schools.com/php/default.asp
- https://www.w3schools.com/php/php_intro.asp

**Online PHP překladače pro "pokusy":**

- [https://www.w3schools.com/tryit/trycompiler.asp?filename=demo_php](https://www.w3schools.com/tryit/trycompiler.asp?filename=demo_php)
- [https://onecompiler.com/php](https://onecompiler.com/php)

Liší se tím, že první zobrazí výsledek jako na webové stránce, druhý zobrazí vygenerovaný HTML kód.

### Co je PHP

PHP je skriptovací jazyk:
- Skripty jsou programy zpracovávané na serveru (server-side scripts).
- Skripty slouží ke generování HTML (a CSS) kódu.

Obsahuje všechny konstrukce programovacího jazyka:

- proměnné (dynamické typování – až na výjimky vznikají přiřazením)
- pole (číselně indexované i asociativní)
- cykly a větvení
- funkce. PHP je na funkcích postaveno. Téměř vše se jimi vykonává. Obsahuje jich více než 1000. Bez dokumentace to nejde.

### Jak PHP funguje

PHP skripty se vkládají do jednoho souboru spolu s běžným HTML kódem, jen se od něj oddělují dvojicí značek

```php
<?php ... ?>
```

Této uzavřené části se říká "**PHP ostrůvek**". Takovýchto ostrůvků běžně bývá v jednom souboru víc. Bez výjimky platí, že:

1. Uvnitř značek <?php a ?> platí výhradně "svět" PHP.
2. Mimo ně platí "svět" HTML (popř. CSS, JS nebo SQL).

Tyto dva "světy" se nesmí míchat.

Soubor s PHP skripty **musí mít příponu `.php`**. Technicky může mít příponu `.php` i když v něm žádný PHP skript není. Opačně to neplatí. Skripty v souboru `.html` Apache k překladu nepošle – nevykonají se!

### Důležité

⚠️ **PHP generuje kód. Neslouží k jeho formátování.**

PHP to ani neumí. K tomu jsou HTML značky a CSS styly vložené buď přímo do PHP ostrůvků jako “text”, popř. mimo něj. Pak jsou to jen obyčejné značky, které s PHP nemají žádnou souvislost. 

Jinými slovy, příkaz `echo "<h1>"`  integruje po zpracování PHP překladačem do souboru 4 znaky `<h1>`. Tím jeho činnost končí. Vůbec netuší, k čemu tam jsou, nebo zda je dále v kódu uzavírací značka. To je starost programátora. Příklady:

```php
<?php
  echo rand(1,10) . "<br>";
  echo date("Y") . "<br>";
  echo rand(date("Y"), date("Y") + 10) . "<br>";
?>
```

První příklad pošle po vyhodnocení jedno náhodné číslo v intervalu 1 až 10 včetně, druhý vypíše aktuální rok ve tvaru RRRR a třetí… ???.

### Datové typy

Každá proměnná je určitého datového typu. Ve skriptu jsme si vytvořili proměnné dvou základních typů – **string** (textový řetězec) a **int** (celé číslo).

PHP je tzv. **dynamicky typovaný jazyk**. To znamená, že datové typy nemusíme u proměnných zadávat (jako třeba v jazyce C nebo Java), ale PHP si typ podle obsahu proměnné nastaví samo. 

Mezi typy také PHP samo převádí. Teoreticky se o datové typy nemusíme ani moc starat. Když to vypadá jako číslo, je to číslo.

Ze základních typů má PHP ještě typ **float** (reálné číslo) a **boolean** (logická hodnota).


| Typ             | Označení    | Příklad     | Rozsah              |
|-----------------|-------------|-------------|---------------------|
| Řetězec         | string      | `$a = "text"` | "neomezená"              |
| Celé číslo      | int         | `$b = 42`     | 2 ∙ 10<sup>±18</sup>      |
| Reálné číslo    | float, real | `$c = 3.14`   | 1.8 ∙ 10<sup>±308</sup>   |
| Logická hodnota | boolean     | `$d = true`   | true = 1, false = 0 |

Poznámka: v PHP je float a real totéž.


---

## PRAXE


⚠️ Klíčový požadavek: umět napsat znaky: `$ ~ # " ' < > { } [ ] ;`

### Adresář webu na serveru TuX

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

### 💾 První cvičení
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
4.	Příkaz `echo` podobně jak v bashi vypisuje text.
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






