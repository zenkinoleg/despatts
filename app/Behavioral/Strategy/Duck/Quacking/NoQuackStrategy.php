<?php

namespace App\Behavioral\Strategy\Duck\Quacking;

class NoQuackStrategy implements QuackStrategyInterface
{
    const string MESSAGE_SILENCE = '';
    const string MESSAGE_SQUEEZE = 'eeek';
    public function quack(): void
    {
        echo self::MESSAGE_SILENCE . PHP_EOL;
    }

    public function panic(): void
    {
        echo self::MESSAGE_SQUEEZE . PHP_EOL;
    }
}