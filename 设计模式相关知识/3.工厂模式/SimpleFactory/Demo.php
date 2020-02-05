<?php

namespace DesignPattern\SimpleFactory;

class Demo
{
    public function index()
    {
        // 实例化工厂类
        $Factory = new Factory();
        // 获取ProductA产品的对象
        $productA = $Factory->create('ProductA');
        // 执行产品中的方法
        $productA->productFunction();
        // 获取ProductB产品的对象
        $productB = $Factory->create('ProductB');
        // 执行产品中的方法
        $productB->productFunction();
    }
}

(new Demo())->index();