<?php

function toRna($chaine)
{
    $dna = ['G','C','T','A'];
    $rna = ['C','G','A','U'];
    $ret = '';

    for ($i=0; $i< strlen($chaine);$i++)  {
        if (($key = array_search($chaine[$i], $dna)) === false) {
            throw new Exception("Only GCTA letters in DNA strand", 1);   
        }
        $ret = $ret . $rna[$key];
    }

    return $ret;

}

