<?php

interface Rule
{
    public function check($index, $rollsHistory);
    public function score($index, $rollsHistory);
    public function goAhead();
}
