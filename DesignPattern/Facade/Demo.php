<?php

namespace DesignPattern\Facade;

class Demo
{
    public function index()
    {
        // 不使用代理模式
        (new SubModuleA)->moduleFunction();
        (new SubModuleB)->moduleFunction();
        # code...

        // 使用代理模式
        ModuleFacade::moduleFunction();
    }
}