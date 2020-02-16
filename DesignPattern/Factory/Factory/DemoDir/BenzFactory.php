<?php

namespace DesignPattern\Factory\Factory\DemoDir;

/**
 * Class BenzFactory
 * @package DesignPattern\Factory\Factory\DemoDir
 * @desc 奔驰工厂
 */
class BenzFactory implements FactoryInterface
{
    public function create()
    {
        return (new Benz());
    }
}