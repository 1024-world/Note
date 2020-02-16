<?php

namespace DesignPattern\Factory\AbstractFactory\DemoDir;

/**
 * Class AudiMotor
 * @package DesignPattern\Factory\AbstractFactory\DemoDir
 * @desc 奥迪牌摩托
 */
class AudiMotor implements MotorInterface
{
    public function drift()
    {
        return 'Audi Motor Drift.';
    }
}