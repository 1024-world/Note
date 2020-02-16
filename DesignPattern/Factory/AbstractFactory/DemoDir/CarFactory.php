<?php

namespace DesignPattern\Factory\AbstractFactory\DemoDir;

/**
 * Class CarFactory
 * @package DesignPattern\Factory\AbstractFactory\DemoDir
 * @desc 汽车工厂
 */
class CarFactory implements FactoryInterface
{
    public function createCar($carName)
    {
        if ($carName == 'Audi') {
            return (new AudiCar());
        } elseif ($carName == 'Benz') {
            return (new BenzCar());
        }

        return null;
    }

    public function createMotor($motorName)
    {

    }
}