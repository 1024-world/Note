<?php

namespace DesignPattern\Adapter\DemoDir;

/**
 * Class UsbDevice
 * @package DesignPattern\Adapter\DemoDir
 * @desc USB设备类
 */
class UsbDevice implements UsbInterface
{
    public function squareInterface()
    {
        echo 'USB device inserted successfully.' . PHP_EOL;
    }
}