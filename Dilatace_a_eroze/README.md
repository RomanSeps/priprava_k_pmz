# Příprava_k_pmz

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
