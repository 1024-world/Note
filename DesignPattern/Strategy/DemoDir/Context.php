<?php

namespace DesignPattern\Strategy\DemoDir;

/**
 * Class Context
 * @package DesignPattern\Strategy\DemoDir
 * @desc 策略选择类
 */
class Context
{
    private $strategy;

    public function __construct(PromoteStrategyInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function getPromotePrice($curPrice)
    {
        return $this->strategy->getPromotionPrice($curPrice);
    }
}