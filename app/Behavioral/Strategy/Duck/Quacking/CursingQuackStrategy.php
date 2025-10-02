<?php

namespace App\Behavioral\Strategy\Duck\Quacking;

class CursingQuackStrategy implements QuackStrategyInterface
{

    public function quack(): void
    {
        echo 'Gimme your food you ape, now!' . PHP_EOL;
    }

    public function panic(): void
    {
        echo 'I will your brain from within. Mwahahahaha' . PHP_EOL;
    }
}