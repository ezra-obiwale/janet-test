<?php

/*
 * SEE README.md FOR THE DEPTH FIRST, TREE TRAVERSAL ALGORITHM
 */

/**
 * Find characters found in the two provided strings in the order they are found
 * in the first string
 * 
 * @param string $string1
 * @param string $string2
 * @return string
 */
function find_chars($string1, $string2) {
    $chars = '';
    for ($i = 0; $i < strlen($string1); $i++) {
        if (stristr($string2, $string1[$i])) $chars .= $string1[$i];
    }
    return $chars;
}

/**
 * Remove duplicates from a sorted single-dimensional array
 * @param string $sortedArray Unique array
 */
function compact_array(array &$sortedArray) {
    $sortedArray = array_flip(array_flip($sortedArray));
    return $sortedArray;
}

/**
 * Rotate given array of integers by the given position
 * @param array $integers
 * @param int $position
 * @return array Array of rotated integeres
 */
function rotate_array(array $integers, $position = 2) {
    $newArray = [];
    $arrayLength = count($integers);
    for ($i = $position; $i > 0; $i--) {
        $newArray[] = $integers[$arrayLength - $i];
        unset($integers[$arrayLength - $i]);
    }
    return array_merge($newArray, $integers);
}

function gcf($a, $b) {
    return ($b == 0) ? $a : gcf($b, $a % $b);
}

/**
 * Finds the LCM of an array of integers
 * @param array $integers
 * @return int
 */
function lcm(array $integers) {
    if (count($integers) > 1) {
        $a = array_shift($integers);
        $b = array_shift($integers);
        $integers[] = ($a / gcf($a, $b) * $b);
        return lcm($integers);
    }
    else {
        return $integers[0];
    }
}
