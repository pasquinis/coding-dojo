#!/usr/bin/env php
<?php
require_once 'GameOfLife.php';

$gol = new GameOfLife(5, 10);
$gol->add([[1, 1] , [1, 2], [1, 3]]);
$gol->add([[3, 1] , [3, 2], [3, 3]]);
$gol->add([[2, 8] , [2, 9], [3, 8], [3, 9]]);
echo $gol->grid();

while(true) {
  $line = fgets(STDIN);
  $gol->tick();
  echo $gol->grid();
}
