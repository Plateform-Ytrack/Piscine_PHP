<?php

function capsMe($stringToChange): string{
    return strtoupper($stringToChange);
}

function lowerMe($stringToChange): string{
    return strtolower($stringToChange);
}

function upperCaseFirst($stringToChange): string{
    return ucwords($stringToChange);
}

function lowerCaseFirst($stringToChange) : string {
    $result = '';
    $words = explode(' ', $stringToChange);
    foreach ($words as $word) {
        $word = ' ' . lcfirst($word);
        $result .= $word;
    }
    return ltrim($result);
}

function removeBlankSpace($stringToChange): string{
    return trim($stringToChange);
}

?>