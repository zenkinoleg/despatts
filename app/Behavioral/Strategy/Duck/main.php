<?php

use app\Behavioral\Strategy\Duck\CursingQuackStrategy;
use app\Behavioral\Strategy\Duck\Duck;
use app\Behavioral\Strategy\Duck\HighFlyStrategy;
use app\Behavioral\Strategy\Duck\PoliteQuackStrategy;

$goodDuck = new Duck(
    new PoliteQuackStrategy,
    new HighFlyStrategy,
);
$goodDuck->meet();
$goodDuck->repel();

$evilDuck = new Duck(
    new CursingQuackStrategy,
    new HighFlyStrategy,
);
$evilDuck->meet();
$evilDuck->repel();