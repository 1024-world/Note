<?php

namespace DesignPattern\Adapter\DemoDir;

/**
 * Class HdmiAdapter
 * @package DesignPattern\Adapter\DemoDir
 * @desc HDMI标准 to USB标准的适配器
 */
class HdmiAdapter implements UsbInterface
{
    private $HdmiDevice;

    public function __construct(HdmiInterface $hdmi)
    {
        $this->HdmiDevice = $hdmi;
    }

    // USB方形接口输出HDMI设备内容
    public function squareInterface()
    {
        $this->HdmiDevice->irregularInterface();
    }
}