<?php

function raindrops($nb)
{
    $prime = [3=>'Pling',5=>'Plang',7=>'Plong'];

    $res = '';


    foreach ($prime as $key=> $val) {
        if ( !($nb % $key))
            $res .= $val;
    }

    if ($res === '') {
        $res .= $nb;
    }

    return $res;

}
