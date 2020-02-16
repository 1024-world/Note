<?php

namespace Algorithm\Sort;

/**
 * Class Facade
 * @package Algorithm\Sort
 * @desc 排序模块外观类
 */
class Facade
{
    /**
     * @desc 冒泡排序
     * @param array $arr
     * @return array
     */
    public static function BubbleSort($arr = [])
    {
        return (new BubbleSort())->sort($arr);
    }

    /**
     * @desc 插入排序
     * @param array $arr
     * @return array
     */
    public static function InsertSort($arr = [])
    {
        return (new InsertSort())->sort($arr);
    }

    /**
     * @desc 选择排序
     * @param array $arr
     * @return array
     */
    public static function SelectSort($arr = [])
    {
        return (new SelectSort())->sort($arr);
    }

    /**
     * @desc 快速排序
     * @param array $arr
     * @return array
     */
    public static function QuickSort($arr = [])
    {
        return (new QuickSort())->sort($arr);
    }

    /**
     * @desc 合并排序
     * @param array $arr
     * @return array
     */
    public static function MergeSort($arr = [])
    {
        return (new MergeSort())->sort($arr);
    }

    /**
     * @desc 希尔排序
     * @param array $arr
     * @return array
     */
    public static function ShellSort($arr = [])
    {
        return (new ShellSort())->sort($arr);
    }

    /**
     * @desc 堆排序
     * @param array $arr
     * @return array
     */
    public static function HeapSort($arr = [])
    {
        return (new HeapSort())->sort($arr);
    }
}