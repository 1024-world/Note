<?php

namespace DesignPattern\Factory\SimpleFactory\DemoDir;

/**
 * Interface CarInterface
 * @package DesignPattern\Factory\SimpleFactory\Demo
 * @desc 汽车接口
 */
interface CarInterface
{
    // 汽车发动
    public function launch();

    // 汽车刹车
    public function brake();
}