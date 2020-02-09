<?php

namespace DesignPattern\Factory\AbstractFactory;

interface FactoryInterface
{
    public function createCategoryA($productName);
    public function createCategoryB($productName);
}