<?php

namespace DesignPattern\Adapter;

class Demo
{
    public function index()
    {
        (new Tool())->standardA(new ProductA());

        (new Tool())->standardA(new Adapter(new ProductB()));
    }
}