<?php

namespace DesignPattern\Decorator\DemoDir;

/**
 * Class DecoratorAbstract
 * @package DesignPattern\Decorator\DemoDir
 * @desc 汽车装饰器类
 */
abstract class DecoratorAbstract implements CarInterface
{
    private $Car;

    public function __construct(CarInterface $car)
    {
        $this->Car = $car;
    }

    public function price()
    {
        return $this->Car->price();
    }
}