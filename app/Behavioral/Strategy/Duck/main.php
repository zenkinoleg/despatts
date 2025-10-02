<?php

namespace App\Behavioral\Strategy\Duck;

use App\Behavioral\Strategy\Duck\Flying\HighFlyStrategy;
use App\Behavioral\Strategy\Duck\Quacking\CursingQuackStrategy;
use App\Behavioral\Strategy\Duck\Quacking\PoliteQuackStrategy;

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