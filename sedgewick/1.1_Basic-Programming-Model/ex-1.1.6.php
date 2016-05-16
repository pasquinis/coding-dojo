<?php

$f = 0;
$g = 1;
for ($i = 0; $i <= 15; $i++)
{
    echo "f: {$f}".PHP_EOL;
    $f = $f + $g;
    $g = $f - $g;
}
