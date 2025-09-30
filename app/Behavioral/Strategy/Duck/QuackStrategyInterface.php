<?php

namespace app\Behavioral\Strategy\Duck;
interface QuackStrategyInterface
{
    public function quack(): void;

    public function panic(): void;
}