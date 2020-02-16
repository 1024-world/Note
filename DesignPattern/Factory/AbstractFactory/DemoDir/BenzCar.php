<?php


namespace DesignPattern\Factory\AbstractFactory\DemoDir;

/**
 * Class BenzCar
 * @package DesignPattern\Factory\AbstractFactory\DemoDir
 * @desc 奔驰牌汽车
 */
class BenzCar implements CarInterface
{
    public function launch()
    {
        return 'Benz Car Launch.';
    }

    public function brake()
    {
        return 'Benz Car Brake.';
    }
}