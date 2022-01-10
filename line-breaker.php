<?php
    function breakLines(string $str, int $index): string {
        $words = explode(" ", $str);
        $counter = 0;
        $indexesNL = array();
        $output = "";

        foreach ($words as $key => $word) {
            if ($key < count($words) -1) {
                if ($counter + strlen($words[$key + 1]) >= $index) {
                    array_push($indexesNL, $key);
                    $counter = -1;
                }
                $counter += strlen($word);
                $counter++;
            }
        }
        foreach ($words as $key => $word) {
            $output .= $word . (in_array($key, $indexesNL) ? "\n" : " ");
        }

        return substr($output, 0, -1); 
    }

    echo breakLines("Line with words should break at this spot", 15) . "\n" . "\n";
    echo breakLines("Title is long\nLine with words break", 12) . "\n";
?>