<?php

namespace DesignPattern\Strategy;

class Demo
{
    public function index()
    {
        // 注入策略 A的对象
        $context = new Context((new strategyA()));
        // 执行策略 A的方法
        $context->strategyFunction();

        // 注入策略 B的对象
        $context = new Context((new strategyB()));
        // 执行策略 B的方法
        $context->strategyFunction();
    }
}