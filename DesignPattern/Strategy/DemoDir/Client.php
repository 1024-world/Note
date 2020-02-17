<?php

namespace DesignPattern\Strategy\DemoDir;

/**
 * Class Client
 * @package DesignPattern\Strategy\DemoDir
 * @desc 策略示例测试代码客户端
 */
class Client
{
    public function index()
    {
        $curPrice = 1985;
        $price = [];

        // 获取打折策略的单价
        $context = new Context(new Discount());
        $price[] = $context->getPromotePrice($curPrice);
        // 获取立减策略的单价
        $context = new Context(new Reduction());
        $price[] = $context->getPromotePrice($curPrice);

        echo '最低价格：' . min($price) . PHP_EOL;
    }
}

require_once dirname(__DIR__) . '/../../vendor/autoload.php';

(new Client())->index();