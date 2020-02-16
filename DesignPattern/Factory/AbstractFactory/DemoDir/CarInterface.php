<?php

namespace DesignPattern\Factory\AbstractFactory\DemoDir;

/**
 * Interface CarInterface
 * @package DesignPattern\Factory\AbstractFactory\DemoDir
 * @desc 汽车接口
 */
interface CarInterface
{
    // 汽车启动
    public function launch();

    // 汽车刹车
    public function brake();
}