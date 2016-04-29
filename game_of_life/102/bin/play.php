#!/usr/bin/env php
<?php
require 'GameOfLife.php';

$blinker = [[1, 0], [1, 1], [1, 2]];
$blinker2 = [[10, 10], [10, 11], [10, 12]];
$glider = [ [4, 1], [5, 2], [6, 0], [6, 1], [6, 2]];

$gol = new GameOfLife($width = 40, $height = 20);
$gol->add($blinker);
$gol->add($blinker2);
$gol->add($glider);

system('clear');
while(true) {
  $gol->tick();
  echo $gol->displayUtf8();
  #$line = fgets(STDIN);
  usleep(500000);
  system('clear');
}
