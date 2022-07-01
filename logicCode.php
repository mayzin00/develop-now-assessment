<?php

function transformedArray(array $inputArray) {

    $zeroArray = [];

    foreach ($inputArray as $index => $value) {
        if ($value === 0) {
            $zeroArray [] = $value;
            unset($inputArray[$index]);
        }
    }

    $zeroArrayLength = count($zeroArray);

    $middle = (int)(round($zeroArrayLength / 2));

    $firstZeroArray = array_fill(0, $middle, 0);
    $lastZeroArray = array_fill(0, $zeroArrayLength - $middle, 0);

    return array_merge($firstZeroArray, $inputArray, $lastZeroArray);
}

$inputArray = array(5,0,0,6,0,8);
var_dump(transformedArray($inputArray));
?>