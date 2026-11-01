
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


