<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    $tab_a = str_split ($a);
    $tab_b = str_split ($b);
    $length = count($tab_a);
    if ($length != count($tab_b)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.', 1);
    }

    $err = 0;

    for ($i=0;$i<$length; $i++) {
        if ($tab_a[$i] !== $tab_b[$i]) {
            $err++;
        }
    }

    return $err;
}
