<?php
interface Rules
{
    public function canApply($integer);
    public function say($integer);
}
