<?php

namespace DesignPattern\Factory\SimpleFactory\DemoDir;

/**
 * Class CarFactory
 * @package DesignPattern\Factory\SimpleFactory\Demo
 * @desc 汽车工厂类
 */
class CarFactory
{
    public function create($carName)
    {
        if ($carName == 'Audi') {
            return new Audi();
        } elseif ($carName == 'Benz') {
            return new Benz();
        }

        return NULL;
    }
}