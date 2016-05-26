<?php

$t = 9.0;

while (abs($t - 9.0/$t) > .001) {
    $t = (9.0 / $t + $t) / 2.0;
}

echo sprintf("%.5f\n", $t) . PHP_EOL;

/*** ***/

$sum = 0;
for ($i = 1; $i < 1000; $i++) {
    for ($j = 0; $j < $i; $j++) {
        $sum++;
    }
}

echo $sum . PHP_EOL;

/*** ***/

$sum = 0;

for ($i = 1; $i < 1000; $i *= 2) {
    for ($j = 0; $j < N; $j++) {
        $sum++;
    }
}

echo $sum . PHP_EOL;
