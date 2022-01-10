<?php

function reverse($string): string
{
    return strrev($string);
}

function isPalindrome(string $string, string $encoding = null): bool
{
    $chars = mb_str_split($string, 1, $encoding ?: mb_internal_encoding());
    return implode('', array_reverse($chars));
/**
  *  if (strpos($string, strrev)){
   *     return true
    *}
    *else{
    *    return false
    *}
    */
}

?>