<?php

$start = microtime(true);
$sum = 2;

calcNext($sum, 1, 2);


$end = microtime(true);

echo 'result  ' . $sum . ' ' . PHP_EOL;
echo 'duration ' . (float)($end-$start);


function calcNext (&$sum, $first, $second)
{
    $third = $first + $second;

    if ($third > 4000000)
        return true;

    if ($third % 2 == 0) {
        echo "$third\n";
        $sum += $third;
    }

    calcNext($sum, $second,$third);
}
