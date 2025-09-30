<?php

namespace app\Behavioral\Strategy\Duck;

readonly class Duck
{
    public function __construct(
        readonly private QuackStrategyInterface $quackStrategy,
        readonly private FlyStrategyInterface $flyStrategy
    )
    {
    }

    public function meet(): void
    {
        echo 'Hello ducky!' . PHP_EOL;
        $this->quackStrategy->quack();
    }

    public function repel(): void
    {
        echo 'Get outta here birdie' . PHP_EOL;
        $this->quackStrategy->panic();
        echo 'I mean it. Get out! (Pushing it with the leg)' . PHP_EOL;
        $this->flyStrategy->fly();
    }
}