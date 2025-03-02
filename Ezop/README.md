# Interpret ezoterického programovacího jazyka
- [Zpět na hlavní stránku](https://github.com/RomanSeps/priprava_k_pmz/tree/main)
- Úkolem je implementovat jednoduchý interpret ezoterického programovacího jazyka ezop.
- Úloha je znovu zpracována v jazyce PHP.

## Implementace
- Program bude číst vstupní instrukce v textovém formátu.

```PHP
            echo "Zadejte hodnotu @: ";
            $input = trim(fgets(STDIN));
            $value = $input;
```

- Program bude postupně vybírat a vykonávat instrukce z fronty.

```PHP
foreach($prikazy as $x){
    ezop($x, $hodnota);
}
```

- V případě, že nebude zápis syntakticky správný (např. IO@), zobrazí se chybové hlášení a skript bude ukončen.

```PHP
default:
    echo "Byl zadán neplatný příkaz. Zkontrolujte prosím příkaz a zkuste znovu... ";
    exit(1);
```

- Počáteční hodnota proměnné @ je před interpretací příkazů inicializována vždy na 0.

```PHP
$hodnota = 0;
```

## Čtení příkazů
Program čte jednotlivé příkazy za pomocí **switch / case.**

```PHP
switch($command){
        case 'I@':
            echo "Zadejte hodnotu @: ";
            $input = trim(fgets(STDIN));
            $value = $input;
            break;
        
        case 'G@':
            $value = RandomNumber();
            break;

        case 'O@':
            echo $value;
            break;
```

Příkazy samotné, jsem si trochu upravil, aby se s nimi lépe pracovalo. 
Zatím mě nenapadlo žádné jiné efektivní řešení čtení příkazů.
Např.: z "-" na "@-" 

```PHP
case '@+':
            $value++;
            break;

        case '@-':
            $value--;
            break;
```
