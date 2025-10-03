<?php

namespace App\Behavioral\Strategy\Duck;

use App\Behavioral\Strategy\Duck\Flying\FlyStrategyInterface;
use App\Behavioral\Strategy\Duck\Quacking\QuackStrategyInterface;

/**
 * A context class representing skeleton to build up the Duck upon.
 * Having two silly methods to interact with a duck, just in order
 * to demonstrate different behaviours based on abstract strategy
 * and its separate implementations.
 */
readonly class SimpleDuck
{
    public function __construct(
        private QuackStrategyInterface $quackStrategy,
        private FlyStrategyInterface $flyStrategy
    )
    {
    }

    /**
     * Just say hey to a duck
     * Single strategy involved
     * @return void
     */
    public function meet(): void
    {
        echo 'Hello ducky!' . PHP_EOL;
        $this->quackStrategy->quack();
    }

    /**
     * Two actions scenario, we're shooshing a duck first, then kicking it
     * Two strategies involved with their own set of methods
     * @return void
     */
    public function repel(): void
    {
        echo 'Get outta here birdie' . PHP_EOL;
        $this->quackStrategy->panic();
        echo 'Shoosh shoosh, get out! (Pushing it with the leg)' . PHP_EOL;
        $this->flyStrategy->fly();
    }
}