<?php

namespace Algorithm\Sort;

/**
 * Class Client
 * @package Algorithm\Sort
 * @desc 排序测试代码
 */
class Client
{
    public $arr = [16, 3, 14, 65, 13, 45, 24, 69, 100, 92, 34, 54, 65];

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

(new Client());