<?php

function distance($a, $b)
{
    $tab_a = str_split ($a);
    $tab_b = str_split ($b);   

    if (count($tab_a) != count($tab_b)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.', 1);
    }

    return count(array_diff_assoc($tab_a,$tab_b));

}
