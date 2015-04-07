<?php

function from(DateTime $dt)
{
    $newDate =clone $dt;
    return $newDate->add(new DateInterval('PT1000000000S'));

}

