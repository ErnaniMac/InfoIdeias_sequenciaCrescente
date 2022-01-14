<?php

# Verifica se um array possui sequencia crescente apenas retirando 1 valor.
/**
 * @param array $array
 * @return bool
 */
function sequenciaCrescente(array $array): bool
{
    foreach ($array as $val) {
        if(!is_int($val)) return false;
    }

    if (count($array) <= 2) return true;

    for ($count = 0; $count < count($array); $count++) {
        
        $sliceArray = $array;
        unset($sliceArray[$count]);
        $sliceArray = array_values($sliceArray);

        $isOrdered = true;

        for ($ind = 0; $ind < count($sliceArray) - 1; $ind++) {
            if (($sliceArray[$ind] + 1) != $sliceArray[$ind + 1]) {
                $isOrdered = false;
            }
        }

        if ($isOrdered) return true;
    }

    return false;
}




var_dump(sequenciaCrescente([1, 3, 2, 1]));
var_dump(sequenciaCrescente([1, 3, 2]));
var_dump(sequenciaCrescente([1, 2, 1, 2]));
var_dump(sequenciaCrescente([3, 6, 5, 8, 10, 20, 15]));
var_dump(sequenciaCrescente([1, 4, 10, 4, 2]));
var_dump(sequenciaCrescente([10, 1, 2, 3, 4, 5]));
var_dump(sequenciaCrescente([1, 1, 1, 2, 3]));
var_dump(sequenciaCrescente([0, -2, 5, 6]));
var_dump(sequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]));
var_dump(sequenciaCrescente([40, 50, 60, 10, 20, 30]));
var_dump(sequenciaCrescente([1, 1]));
var_dump(sequenciaCrescente([1, 2, 5, 3, 5]));
var_dump(sequenciaCrescente([1, 2, 5, 5, 5]));
var_dump(sequenciaCrescente([4, 3, 4, 5, 6, 7]));
var_dump(sequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]));
var_dump(sequenciaCrescente([1, 2, 3, 4, 3, 6]));
var_dump(sequenciaCrescente([1, 2, 3, 4, 99, 5, 6]));
var_dump(sequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]));
var_dump(sequenciaCrescente([3, 5, 67, 98, 3]));



