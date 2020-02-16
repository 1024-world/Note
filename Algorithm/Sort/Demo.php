<?php

namespace Algorithm\Sort;

/**
 * Class Demo
 * @package Algorithm\Sort
 * @desc 排序测试代码
 */
class Demo
{
    public $arr = [1, 3, 5, 65, 13, 45, 24, 69, 100, 92, 34, 54, 65];

    public function __construct()
    {
        $this->sort();
    }

    public function sort()
    {
        print_r(Facade::BubbleSort($this->arr));
        print_r(Facade::SelectSort($this->arr));
        print_r(Facade::InsertSort($this->arr));
        print_r(Facade::QuickSort($this->arr));
        print_r(Facade::MergeSort($this->arr));
        print_r(Facade::ShellSort($this->arr));
        print_r(Facade::HeapSort($this->arr));
    }
}

// 引用composer的自动加载
require_once dirname(__DIR__) . '/../vendor/autoload.php';

(new Demo());