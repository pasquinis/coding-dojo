#!/usr/bin/env php

<?php

require 'SelectionSort.php';
require 'DigitsSegmentDisplay.php';


$arrayToSort = [ 3, 2, 4, 5, 6, 1, 8, 7, 9];
$selection = new SelectionSort(new DigitsSegmentDisplay);
$selection->sort($arrayToSort);
