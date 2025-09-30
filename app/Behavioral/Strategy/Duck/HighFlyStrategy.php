<?php

namespace App\Behavioral\Strategy\Duck;

class HighFlyStrategy implements FlyStrategyInterface
{

    public function fly(): void
    {
        echo 'The duck soared into the sky at the speed of a jet.' . PHP_EOL;
    }
}