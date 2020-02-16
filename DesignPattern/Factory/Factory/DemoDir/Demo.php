<?php

namespace DesignPattern\Factory\Factory\DemoDir;

/**
 * Class Demo
 * @package DesignPattern\Factory\Factory\DemoDir
 * @desc 工厂方法示例测试代码
 */
class Demo
{
    public function index()
    {
        $audiFactory = new AuiFactory();
        $audiCar = $audiFactory->create();
        echo $audiCar->launch() . PHP_EOL;
        echo $audiCar->brake() . PHP_EOL;

        $benzFactory = new BenzFactory();
        $benzCar = $benzFactory->create();
        echo $benzCar->launch() . PHP_EOL;
        echo $benzCar->brake() . PHP_EOL;
    }
}

require_once dirname(__DIR__) . '/../../../vendor/autoload.php';

(new Demo())->index();