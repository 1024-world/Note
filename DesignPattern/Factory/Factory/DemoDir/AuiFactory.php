<?php

namespace DesignPattern\Factory\Factory\DemoDir;

/**
 * Class AuiFactory
 * @package DesignPattern\Factory\Factory\DemoDir
 * @desc 奥迪工厂
 */
class AuiFactory implements FactoryInterface
{
    public function create()
    {
        return (new Audi());
    }
}