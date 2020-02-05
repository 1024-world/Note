<?php

namespace DesignPattern\Decorator;

class Demo
{
    public function index()
    {
        // 调用产品中的方法
        (new Product())->productFunction();

        // 同时获取搭配 A和产品的方法，产生叠加效果
        (new CollocationA(new Product()))->productFunction();
    }
}