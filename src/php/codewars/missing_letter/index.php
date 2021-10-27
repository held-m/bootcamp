<?php
//Write a method that takes an array of consecutive (increasing) letters as input and that returns the missing letter in the array.
//
//You will always get an valid array. And it will be always exactly one letter be missing. The length of the array will always be at least 2.
//The array will always contain letters in only one case.
//
//Example:
//
//['a','b','c','d','f'] -> 'e' ['O','Q','R','S'] -> 'P'
//
//["a","b","c","d","f"] -> "e"
//["O","Q","R","S"] -> "P"
//
//(Use the English alphabet with 26 letters!)

    function find_missing_letter(array $array): string
    {
        $copyArray = $array;
        $firstLetter = array_shift($copyArray);
        $lastLetter = array_pop($copyArray);

        $fullArr = range($firstLetter, $lastLetter);

        $diff = array_diff($fullArr, $array);
        $diffNewIndex = array_values($diff);
        return $diffNewIndex[0];
    }
?>