# Kalkulačka mzdy brigádníka

Vytvořte PHP skript, který bude fungovat jako kalkulačka pro výpočet čisté mzdy na **Dohodu o pracovní činnosti** (DPČ).

Živá ukázka: [https://php.edumach.cz/dpc.php](https://php.edumach.cz/dpc.php) 


# Úkol

Mzda se vypočítává z odpracované hodiny (tu si skript převezme připraveným formulářem). Hodinová sazba je 100&nbsp;Kč za hodinu, což je hrubá mzda brigádníka. Daň z příjmů (co platíme státu) je 15&nbsp;% a tu platíme vždy. V&nbsp;případě, že příjem přesáhne 4000&nbsp;Kč, tak se z hrubého příjmu (počet hodin krát hrubá mzda) bude odečítat ještě zdravotní (4,5&nbsp;%) a sociální pojištění (6,5&nbsp;%).

**Vstup:**

<img src="https://www.edumach.cz/img/dpc_1.png" width=200>

**Příklad výstupu pro <= 4000 Kč:** 

<img src="https://www.edumach.cz/img/dpc_2.png" width=200>

**Příklad výstupu pro > 4000 Kč:**

<img src="https://www.edumach.cz/img/dpc_3.png" width=200>


## Možné rozšíření
- Skript si na vstupu převezme formulářem také hodinovou sazbu.
