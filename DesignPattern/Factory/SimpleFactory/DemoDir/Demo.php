<?php

namespace DesignPattern\Factory\SimpleFactory\DemoDir;

/**
 * Class Demo
 * @package DesignPattern\Factory\SimpleFactory\Demo
 * @desc 简单工厂示例测试代码
 */
class Demo
{
    public function index()
    {
        $carFactory = new CarFactory();

        $audi = $carFactory->create('Audi');
        echo $audi->launch() . PHP_EOL;
        echo $audi->brake() . PHP_EOL;

        $benz = $carFactory->create('Benz');
        echo $benz->launch() . PHP_EOL;
        echo $benz->brake() . PHP_EOL;
    }
}

require_once dirname(__DIR__) . '/../../../vendor/autoload.php';

(new Demo())->index();