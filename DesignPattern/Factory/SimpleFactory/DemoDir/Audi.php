<?php

namespace DesignPattern\Factory\SimpleFactory\DemoDir;

/**
 * Class Audi
 * @package DesignPattern\Factory\SimpleFactory\Demo
 * @desc 奥迪牌汽车
 */
class Audi implements CarInterface
{
    public function launch()
    {
        return "Audi Car Launch.";
    }

    public function brake()
    {
        return "Audi Car Brake.";
    }
}