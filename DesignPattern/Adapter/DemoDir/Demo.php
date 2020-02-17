<?php

namespace DesignPattern\Adapter\DemoDir;

/**
 * Class Demo
 * @package DesignPattern\Adapter\DemoDir
 * @desc 对象适配器示例测试代码
 */
class Demo
{
    public function index()
    {
        // USB设备测试
        $usbDevice = new UsbDevice();

        new Computer($usbDevice);

        // HDMI设备测试
        $hdmiDevice = new HdmiDevice();
        $hdmiAdapter = new HdmiAdapter($hdmiDevice);

        new Computer($hdmiAdapter);
    }
}

require_once dirname(__DIR__) . '/../../vendor/autoload.php';

(new Demo())->index();