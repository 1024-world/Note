<?php

namespace DesignPattern\Proxy;

class Demo
{
    public function index()
    {
        // 获取产品代理类的对象
        $proxyProduct = new ProxyProduct();
        // 访问产品的方法
        $proxyProduct->productFunctionA();
    }
}