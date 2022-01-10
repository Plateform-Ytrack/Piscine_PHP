<?php

    $output = ""; $maxNbr = 100;
    for ($i=0; $i <= $maxNbr; $i++) {
        $isPrime = true;
        for ($j=2; $j < $i/2; $j++) { 
            if ($i % $j === 0) { $isPrime = false; }
        }
        if ($isPrime && $i !== 0 && $i !== 1 && $i !== 4) { $output .= "$i, "; }
    }
    echo substr($output, 0, -2) . "\n";

?>