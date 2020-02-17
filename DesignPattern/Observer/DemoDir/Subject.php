<?php

namespace DesignPattern\Observer\DemoDir;

/**
 * Class Subject
 * @package DesignPattern\Observer\DemoDir
 * @desc 发布者类
 */
class Subject
{
    private $weatherStatus;
    private $observer = [];

    /**
     * @desc 设置状态信息
     * @param $status
     */
    public function setStatus($status)
    {
        if ($status != $this->weatherStatus) {
            $this->weatherStatus = $status;
            $this->notify();
        }
    }

    /**
     * @desc 获取当前状态
     * @return mixed
     */
    public function getStatus()
    {
        return $this->weatherStatus;
    }

    /**
     * @desc 绑定观察者
     * @param ObserverInterface $observer
     */
    public function attach(ObserverInterface $observer)
    {
        $this->observer[] = $observer;
    }

    /**
     * @desc 解绑观察者
     * @param ObserverInterface $observer
     */
    public function detach(ObserverInterface $observer)
    {
        if (in_array($observer, $this->observer)) {
            foreach ($this->observer as $key => $item)
            {
                if ($item == $observer) {
                    unset($this->observer[$key]);
                }
            }
        }
    }

    /**
     * @desc 发布消息
     */
    private function notify()
    {
        foreach ($this->observer as $item) {
            $item->acceptInformation();
        }
    }
}