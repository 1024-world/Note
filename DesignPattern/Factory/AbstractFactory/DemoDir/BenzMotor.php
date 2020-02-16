<?php

namespace DesignPattern\Factory\AbstractFactory\DemoDir;

/**
 * Class BenzMotor
 * @package DesignPattern\Factory\AbstractFactory\DemoDir
 * @desc 奔驰牌摩托
 */
class BenzMotor implements MotorInterface
{
    public function drift()
    {
        return 'Benz Motor Drift';
    }
}