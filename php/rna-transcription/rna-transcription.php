<?php

function toRna($str)
{
    return strtr($str, 'GCTA', 'CGAU');
}

