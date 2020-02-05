<?php

namespace DesignPattern\AbstractFactory;

interface FactoryInterface
{
    public function createCategoryA($productName);
    public function createCategoryB($productName);
}