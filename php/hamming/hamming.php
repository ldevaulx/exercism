<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    $length = strlen($a);
    if ($length != strlen($b)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.', 1);
    }

    $distance = 0;
    for ($i=0;$i<$length; $i++) {
        if ($a[$i] != $b[$i]) {
            $distance++;
        }
    }

    return $distance;
}
