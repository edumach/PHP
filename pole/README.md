
# Pole

Představte si, že ve svém programu potřebujete uložit více proměnných stejného typu. Např. 
- česká jména měsíců, 
- 10 známek ze školy, 
- platy 100 uživatelů
- z databáze načíst tisíc názvů produktů. 

Asi tušíte, že bude nějaká lepší cesta, než začít zběsile bušit proměnné `znamka1`, `znamka2`, `znamka3`... A co kdyby se program rozšířil a známek by bylo tisíc? A jak by se potom vypočítal průměr z těchto známek?

Pro uložení **více hodnot do jedné proměnné** nám v PHP nabízí datovou strukturu, které se říká **pole** (array). PHP má **dva typy polí**. První z nich je tzv. **číselně indexované**, druhé je **asociativní** (v Pythonu se jmenuje slovník). Seznámíme se oběma typy.

## Číselně indexovaná pole

Číselně indexované pole si můžeme představit jako řadu přihrádek někde v paměti počítače (ono mimochodem vnitřně opravdu tak vypadá). Přihrádky jsou číslované **od nuly** a jejich číslům se říká **indexy**. V programování (jako v životě) víceméně vše začíná od nuly.

Přihrádek (počet hodnot) můžeme mít kolik chceme a můžeme si do nich uložit hodnoty libovolného typu a to dokonce i tak, že bude v jedné přihrádce třeba číslo a v druhé text. V praxi by to ovšem nemělo valný smysl.

| Index | 0 | 1 | 2 | 3 | 4 | 5 | 6 |
| --- | --- | --- | --- | --- | --- | --- | --- |
| Hodnota | 23 | 5 | 2 | 80 | 17 | 0 |100 |


## 💾 Známky
> Obecný popis ukázkového kódu

Zkusme si něco podobného naprogramovat, udělejme si zmíněné pole známek. Známky  napíšeme pevně do skriptu.

Pole si uložíme do klasické proměnné. Pojmenujeme ji tak, co v ní je a v množném čísle, tedy v našem případě `$znamky`. Pro samotnou definici pole používáme funkci `array()`:

```php
$znamky = array();  
```

Nyní je v proměnné `$znamky` prázdné pole (neobsahuje žádné prvky).

### Vkládání prvků do pole

Nyní do pole přidejme několik známek. Jak je zvykem, můžeme to udělat několika způsoby. Nový prvek na konec pole přidáme takto:

```php
$znamky[] = 1;  
$znamky[] = 2;  
$znamky[] = 5;  
$znamky[] = 2;
```

Výsledné pole tedy vypadá takto:

| Index | 0 |  1 | 2 | 3 | 
| -- | -- | -- | -- | -- |
| Hodnota | 1 | 2 | 5 | 2 |

  
echo nám **bez znalosti cyklu** pole moc dobře nevypíše, ale můžeme si ho nechat **pracovně**  vypsat pomocí funkce:

```php
print_r()
```

Stejně tak můžeme vložit prvek na konkrétní index v poli. Pokud prvek na tomto indexu už je, prostě se přepíše:

```php
$znamky[2] = 3;
```

Pokud nezadáme index, prvek se **přidá na konec**:

```php
$znamky[] = 4;
```

Pokud známky předem víme, můžeme pole vytvořit rovnou se zadáním jeho obsahu takto:

```php
$znamky = array(1, 2, 3, 4, 2, 2, 1, 3, 2, 5);
```

### Čtení hodnot z pole

Pokud z pole potřebujeme načíst nějakou hodnotu, uděláme to pomocí indexu:

```php
echo ("<p>Třetí známka v poli je $znamky[2]</p>");
```
PHP nám nabízí pro práci s poli [**spoustu funkcí**](https://www.w3schools.com/php/php_ref_array.asp). Pomocí funkcí **array_sum()** (součet) a **count()** (počet) spočítáme průměr zadaných známek:

```php
$znamky= array(1, 2, 3, 4, 2, 2, 1, 3, 2, 5);  
$prumer= array_sum($znamky) / count($znamky);  
echo ("<p>Můj průměr je $prumer</p>");
```

Asi si dokážete představit, jak špatně by byl program čitelný, kdybychom pole neznali a psali `$soucet = $znamka1 + $znamka2 + $znamka3...` Nyní jsme jen jednoduše vydělili součet prvků v poli jejich počtem.

Do pole si můžeme uložit prakticky cokoli, třeba názvy měsíců. Můžeme potom vypsat uživateli aktuální datum a to dokonce česky.

