<?php

namespace App\Behavioral\Strategy\Duck\Flying;

class NoFlyingStrategy implements FlyStrategyInterface
{
    const string MESSAGE = 'Sigh .. I can\'t fly';
    public function fly(): void
    {
        echo self::MESSAGE . PHP_EOL;
    }
}