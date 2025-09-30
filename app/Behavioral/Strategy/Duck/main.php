<?php

namespace App\Behavioral\Strategy\Duck;

require 'c:/web/despatts/vendor/autoload.php';

$goodDuck = new Duck(
    new PoliteQuackStrategy,
    new HighFlyStrategy,
);
$goodDuck->meet();
$goodDuck->repel();

echo PHP_EOL;

$evilDuck = new Duck(
    new CursingQuackStrategy,
    new HighFlyStrategy,
);
$evilDuck->meet();
$evilDuck->repel();