# Příprava_k_pmz
Toto je dokumntace pro úlohy na téma **dilatace** a **eroze.**
Obě úlohy jsou řešeny v jazyce PHP.

## Úloha 1:
Ve vybraném jazyce proveď převod hodnot dvourozměrného pole image2d do markdown tabulky.

```PHP
$final_string = "";
for ($i = 0; $i < 9; $i++) {
    if($i > 0){
        $line = "";
    }else{
    $line = "| - | - | - | - | - | - | - | - | - | <br>"; 
    }
    for ($j = 0; $j < 9; $j++) {
    	$string = "| " . $image2d[$i][$j] . " ";
    	$final_string .= $string;
    }
    $final_string .= " |";
    $final_string .= "<br>";
    $final_string .= $line;
    
}
```

### Výstup
| 0 | 0 | 0 | 0 | 0 | 0 | 0 | 0 | 0 |
| - | - | - | - | - | - | - | - | - |
| 0 | 1 | 1 | 1 | 1 | 1 | 1 | 1 | 0 |
| 0 | 1 | 2 | 2 | 2 | 2 | 2 | 1 | 0 |
| 0 | 1 | 2 | 3 | 3 | 3 | 2 | 1 | 0 |
| 0 | 1 | 2 | 3 | 4 | 3 | 2 | 1 | 0 |
| 0 | 1 | 2 | 3 | 3 | 3 | 2 | 1 | 0 |
| 0 | 1 | 2 | 2 | 2 | 2 | 2 | 1 | 0 |
| 0 | 1 | 1 | 1 | 1 | 1 | 1 | 1 | 0 |
| 0 | 0 | 0 | 0 | 0 | 0 | 0 | 0 | 0 |

## Úloha 2:
Ve vybraném jazyce Implementuj funkce dilatace(image2d) a eroze(image2d).

### Implementace
Dilatace: Každý prvek matice se nahradí maximální hodnotou z původních sousedních hodnot (vlevo, vpravo, nad a pod).

```PHP
if ($i > 0) $neighbors[] = $image2d[$i - 1][$j]; // Nahoru
            if ($i < 8) $neighbors[] = $image2d[$i + 1][$j]; // Dolů
            if ($j > 0) $neighbors[] = $image2d[$i][$j - 1]; // Levá
            if ($j < 8) $neighbors[] = $image2d[$i][$j + 1]; // Pravá

            $neighbors[] = $image2d[$i][$j]; 
            $final[$i][$j] = max($neighbors);
```

Eroze: Každý prvek matice se nahradí minimální hodnotou z původních sousedních hodnot (vlevo, vpravo, nad a pod).

```PHP
if ($i > 0) $neighbors[] = $image2d[$i - 1][$j]; // Nahoru
            if ($i < 8) $neighbors[] = $image2d[$i + 1][$j]; // Dolů
            if ($j > 0) $neighbors[] = $image2d[$i][$j - 1]; // Levá
            if ($j < 8) $neighbors[] = $image2d[$i][$j + 1]; // Pravá

            $neighbors[] = $image2d[$i][$j]; 
            $final[$i][$j] = min($neighbors);
```
