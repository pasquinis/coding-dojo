<?php

# Write a program that takes three integer command-line arguments and prints
# equal if all three are equal, and not equal otherwise.

$firstArgument = $argv[1];
$secondArgument = $argv[2];
$thirdArgument = $argv[3];


$firstInteger = (int) $firstArgument;
$secondInteger = (int) $secondArgument;
$thirdInteger = (int) $thirdArgument;

if (($firstArgument == $secondInteger) && ($secondArgument == $thirdArgument)) {
  echo "equal".PHP_EOL;
} else {
  echo "not equal".PHP_EOL;
}
