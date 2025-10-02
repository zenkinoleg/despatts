<?php

namespace App\Behavioral\Strategy\Duck\Quacking;

class PoliteQuackStrategy implements QuackStrategyInterface
{
    public function quack(): void
    {
        echo 'Good day dear sir, quack quack.' . PHP_EOL;
    }

    public function panic(): void
    {
        echo 'Ugh, that\'s so rude of you.' . PHP_EOL;
    }
}