<?php

namespace DesignPattern\Strategy\DemoDir;

/**
 * Interface PromoteStrategyInterface
 * @package DesignPattern\Strategy\DemoDir
 * @desc 促销活动策略接口
 */
interface PromoteStrategyInterface
{
    public function getPromotionPrice($curPrice);
}