<?php

namespace DesignPattern\Strategy\DemoDir;

/**
 * Class Reduction
 * @package DesignPattern\Strategy\DemoDir
 * @desc 立减策略类
 */
class Reduction implements PromoteStrategyInterface
{
    // 获取促销价
    public function getPromotionPrice($curPrice)
    {
        $userLv = 37;

        if ($userLv >= 50) {
            return $curPrice - 200;
        } elseif ($userLv >= 30) {
            return $curPrice - 100;
        } elseif ($userLv >= 10) {
            return $curPrice - 50;
        }

        return $curPrice;
    }
}