<?php

namespace DesignPattern\Factory\AbstractFactory\DemoDir;

/**
 * Class MotorFactory
 * @package DesignPattern\Factory\AbstractFactory\DemoDir
 * @desc 摩托工厂
 */
class MotorFactory implements FactoryInterface
{
    public function createCar($carName)
    {

    }

    public function createMotor($motorName)
    {
        if ($motorName == 'Audi') {
            return (new AudiMotor());
        } elseif ($motorName == 'Benz') {
            return (new BenzMotor());
        }

        return null;
    }
}