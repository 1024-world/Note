<?php

namespace DesignPattern\Adapter\DemoDir;

/**
 * Class Computer
 * @package DesignPattern\Adapter\DemoDir
 * @desc 电脑类(仅实现USB接口功能)
 */
class Computer implements UsbInterface
{
    public $usbDevice;

    public function __construct(UsbInterface $usb)
    {
        // 插入设备
        $this->usbDevice = $usb;
        // 设备连接情况监测
        $this->squareInterface();
    }

    public function squareInterface()
    {
        $this->usbDevice->squareInterface();
    }
}
