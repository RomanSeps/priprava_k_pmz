<?php
$image2d = [];
for ($i = 0; $i < 9; $i++) {
    for ($j = 0; $j < 9; $j++) {
        $image2d[$i][$j] = 4 - max(abs($i - 4), abs($j - 4));
    }
}

$final_string = "";
for ($i = 0; $i < 9; $i++) {
	$enter = "\n";
    
    $line = "\n| - | - | - | - | - | - | - | - | - |"; 

    for ($j = 0; $j < 9; $j++) {
    	$string = "| " . $image2d[$i][$j] . " ";
    	$final_string .= $string;
    }
    $final_string .= " |";
    $final_string .= $line;
    $final_string .= $enter; 
    
}


echo "<p>";
echo $final_string;
echo "</p>";
?>
