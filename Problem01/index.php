<?php
/**
 * Created by PhpStorm.
 * User: rspielmann
 * Date: 03.02.2016
 * Time: 17:38
 */

$start = microtime(true);
$sum = 0;

for ($i = 3; $i < 1000; $i ++) {

    if($i % 3 == 0 || $i % 5 == 0) {
        //echo $i . PHP_EOL;
        $sum += $i;
    }
}

$end = microtime(true);

echo 'result  ' . $sum . ' ' . PHP_EOL;
echo 'duration ' . (float)($end-$start);