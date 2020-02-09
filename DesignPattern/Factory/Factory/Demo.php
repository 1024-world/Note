<?php

namespace DesignPattern\Factory\Factory;

class Demo
{
    public function index()
    {
        // 获取productA产品的工厂对象
        $productAFactory = new ProductAFactory();
        // 生产ProductA
        $productA = $productAFactory->create();
        // 执行产品中的方法
        $productA->productFunction();
        
        // 获取productB产品的工厂对象
        $productBFactory = new ProductBFactory();
        // 生产ProductB
        $productB = $productBFactory->create();
        // 执行产品中的方法
        $productB->productFunction();
    }
}