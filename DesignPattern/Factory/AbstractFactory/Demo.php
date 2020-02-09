<?php

namespace DesignPattern\Factory\AbstractFactory;

class Demo
{
    public function index()
    {
        // 获取categoryA 产品工厂的对象
        $categoryAFactory = new CategoryAFactory();
        // 生产ProductA
        $productA = $categoryAFactory->createCategoryA('ProductA');
        // 执行ProductA的方法
        $productA->productFunction();

        // 获取categoryB 产品工厂的对象
        $categoryBFactory = new CategoryBFactory();
        // 生产ProductC
        $productC = $categoryBFactory->createCategoryB('ProductC');
        // 执行ProductA的方法
        $productC->productFunction();
    }
}

(new Demo())->index();