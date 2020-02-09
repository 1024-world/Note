<?php

namespace DesignPattern\Strategy;

class Context
{
    protected $strategy;

    public function __construct(StrategyInterface $strategyObj)
    {
        $this->strategy = $strategyObj;
    }

    public function strategyFunction()
    {
        return $this->strategy->strategyFunction();
    }
}