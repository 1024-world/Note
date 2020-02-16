<?php

namespace DesignPattern\Factory\SimpleFactory\DemoDir;

/**
 * Class Benz
 * @package DesignPattern\Factory\SimpleFactory\Demo
 * @desc 奔驰牌汽车
 */
class Benz implements CarInterface
{
    public function launch()
    {
        return "Benz Car Launch.";
    }

    public function brake()
    {
        return "Benz Car Brake.";
    }
}