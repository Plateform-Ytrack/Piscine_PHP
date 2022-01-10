<?php

//$string1 = 'the quick brown fox jumps over the lazy dog';

//function isPangram($string1): bool {
//    $letter = "/(a),(b),(c),(d),(e),(f),(g),(h),(i),(j),(k),(l),(m),(n),(o),(p),(q),(r),(s),(t),(u),(v),(w),(x),(y),(z)/i";
//    echo preg_match($letter, $string1);
//    return preg_match($letter, $string1);
//}

//isPangram($string1);


function isPangram($string) :bool{
    $sentences = strtolower(trim($string));
    $letters = str_split("thequickbrownfoxjumpsoverthelazydog");
    foreach ($letters as $letter) {
        if (!strstr($sentences, $letter))
        return false;
    }
        return true; }

?>