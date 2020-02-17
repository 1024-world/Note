<?php

namespace DesignPattern\Strategy\DemoDir;

/**
 * Class Discount
 * @package DesignPattern\Strategy\DemoDir
 * @desc 打折策略类
 */
class Discount implements PromoteStrategyInterface
{
    // 得到促销价
    public function getPromotionPrice($curPrice)
    {
        $userLv = 37;

        if ($userLv >= 50) {
            return $curPrice * 0.75;
        } elseif ($userLv >= 30) {
            return $curPrice * 0.85;
        } elseif ($userLv >= 10) {
            return $curPrice * 0.95;
        }

        return $curPrice;
    }
}