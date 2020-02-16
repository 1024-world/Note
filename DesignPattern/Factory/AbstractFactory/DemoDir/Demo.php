<?php

namespace DesignPattern\Factory\AbstractFactory\DemoDir;

/**
 * Class Demo
 * @package DesignPattern\Factory\AbstractFactory\DemoDir
 * @desc 抽象工厂示例测试代码
 */
class Demo
{
    public function index()
    {
        $carFactory = new CarFactory();
        $audiCar = $carFactory->createCar('Audi');
        echo $audiCar->launch() . PHP_EOL;
        echo $audiCar->brake() . PHP_EOL;

        $benzCar = $carFactory->createCar('Benz');
        echo $benzCar->launch() . PHP_EOL;
        echo $benzCar->brake() . PHP_EOL;

        $motorFactory = new MotorFactory();
        $audiMotor = $motorFactory->createMotor('Audi');
        echo $audiMotor->drift() . PHP_EOL;

        $benzMotor = $motorFactory->createMotor('Benz');
        echo $benzMotor->drift() . PHP_EOL;
    }
}

require_once dirname(__DIR__) . '/../../../vendor/autoload.php';

(new Demo())->index();