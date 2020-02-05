<?php

namespace DesignPattern\Observer;

class Subject
{
    private $status;
    private $observer = [];

    // 获取数据状态
    public function getStatus()
    {
        return $this->status;
    }

    // 设置数据状态
    public function setStatus($status)
    {
        $this->status = $status;
        $this->notify();
    }

    // 注册观察者
    public function attach(ObserverInterface $observer)
    {
        $this->observer[] = $observer;
    }

    // 注销观察者
    public function detach(ObserverInterface $observer)
    {
        // 检测注册状态
        if (in_array($observer, $this->observer)) {
            foreach ($this->observer as $key => $value) {
                if ($value == $observer) {
                    unset($this->observer[$key]);
                }
            }
        }
    }

    // 通知观察者
    public function notify()
    {
        foreach ($this->observer as $observer) {
            $observer->update();
        }
    }
}