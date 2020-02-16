<?php

namespace DesignPattern\Factory\AbstractFactory\DemoDir;

/**
 * Interface FactoryInterface
 * @package DesignPattern\Factory\AbstractFactory\DemoDir
 * @desc 工厂接口
 */
interface FactoryInterface
{
    // 生产小汽车
    public function createCar($carName);

    // 生产摩托
    public function createMotor($motorName);
}