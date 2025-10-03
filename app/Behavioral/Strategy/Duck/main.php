<?php

namespace App\Behavioral\Strategy\Duck;

use App\Behavioral\Strategy\Duck\Flying\HighFlyStrategy;
use App\Behavioral\Strategy\Duck\Flying\NoFlyingStrategy;
use App\Behavioral\Strategy\Duck\Quacking\CursingQuackStrategy;
use App\Behavioral\Strategy\Duck\Quacking\NoQuackStrategy;
use App\Behavioral\Strategy\Duck\Quacking\PoliteQuackStrategy;

require __DIR__ . '/../../../../vendor/autoload.php';

$goodDuck = new SimpleDuck(
    new PoliteQuackStrategy,
    new HighFlyStrategy,
);
$goodDuck->meet();
$goodDuck->repel();

echo PHP_EOL;

$evilDuck = new SimpleDuck(
    new CursingQuackStrategy,
    new HighFlyStrategy,
);
$evilDuck->meet();
$evilDuck->repel();

echo PHP_EOL;

$rubberDuck = new SimpleDuck(
    new NoQuackStrategy(),
    new NoFlyingStrategy(),
);
$rubberDuck->meet();
$rubberDuck->repel();