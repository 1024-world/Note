<?php

namespace DesignPattern\Facade;

class ModuleFacade
{
    public static function moduleFunction()
    {
        (new SubModuleA)->moduleFunction();
        (new SunModuleB)->moduleFunction();
    }
}