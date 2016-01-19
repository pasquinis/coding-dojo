<?php
interface Rule
{
    public function canApply($integer);
    public function say($integer);
}
