<?php

namespace DesignPattern\Factory\AbstractFactory\DemoDir;

/**
 * Class AudiCar
 * @package DesignPattern\Factory\AbstractFactory\DemoDir
 * @desc 奥迪牌汽车
 */
class AudiCar implements CarInterface
{
    public function launch()
    {
        return 'Audi Car Launch.';
    }

    public function brake()
    {
        return 'Audi Car Brake.';
    }
}