<?php

echo decbin(17) . PHP_EOL;

$valueToConvert = 17;
$output = '';
for ($n = $valueToConvert; (int) $n > 0; $n /= 2) {
    $module = ($n % 2);
    $output = $module . $output;
}

echo $output . PHP_EOL;
