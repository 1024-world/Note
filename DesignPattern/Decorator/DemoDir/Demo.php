<?php

namespace DesignPattern\Decorator\DemoDir;

/**
 * Class Demo
 * @package DesignPattern\Decorator\DemoDir
 * @desc 装饰器示例测试代码
 */
class Demo
{
    public function index()
    {
        // 裸车价格
        $car = new Car();
        echo '裸车价格：' . $car->price() . PHP_EOL;

        // 加配LED大灯价格
        $car = new LEDHeadlights(new Car());
        echo '加配LED大灯价格：' . $car->price() . PHP_EOL;

        // 加配全景天窗
        $car = new PanoramicSunroof(new Car());
        echo '加配全景天窗：' . $car->price() . PHP_EOL;

        // 加配全景天窗+LED大灯
        $car = new PanoramicSunroof(new LEDHeadlights(new Car()));
        echo '加配全景天窗+LED大灯：' . $car->price() . PHP_EOL;
    }
}

require_once dirname(__DIR__) . '/../../vendor/autoload.php';

(new Demo())->index();