#!/usr/bin/env php
<?php
require_once 'GameOfLife.php';

$gol = new GameOfLife(5, 10);
$gol->add([[1, 2], [2, 3], [3, 1], [3, 2], [3, 3] ]);
echo $gol->grid();

while(true) {
  $line = fgets(STDIN);
  $gol->tick();
  echo $gol->grid();
}
