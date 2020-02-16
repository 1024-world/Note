<?php

namespace DesignPattern\Factory\Factory\DemoDir;

/**
 * Class Audi
 * @package DesignPattern\Factory\Factory\DemoDir
 * @desc 奥迪牌汽车
 */
class Audi implements CarInterface
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