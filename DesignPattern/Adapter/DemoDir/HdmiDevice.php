<?php

namespace DesignPattern\Adapter\DemoDir;

/**
 * Class HdmiDevice
 * @package DesignPattern\Adapter\DemoDir
 * @desc HDMI设备类
 */
class HdmiDevice implements HdmiInterface
{
    public function irregularInterface()
    {
        echo 'HDMI device inserted successfully.' . PHP_EOL;
    }
}