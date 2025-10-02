<?php

namespace App\Behavioral\Strategy\Duck\Quacking;
interface QuackStrategyInterface
{
    public function quack(): void;

    public function panic(): void;
}