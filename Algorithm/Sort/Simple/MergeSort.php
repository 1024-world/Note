<?php

namespace Algorithm\Sort\Simple;
/**
 * Class MergeSort
 * @package Algorithm
 * @desc 归并排序
 *
 * 核心思想：将一个大的序列看成是由N个有序的子序列组成，每个字序列的长度为1，然后两两归并
 * 得到一个合并后的有序序列，然后再两两归并，如此重复，直到得到一个长度为N的有序序列。
 *
 * 平均时间复杂度 O(N*logN)
 */
class MergeSort
{
    public function sort($arr = [])
    {
        if (count($arr) == 1)
        {
            return $arr;
        }

        $mid = count($arr) / 2;
        $left = array_slice($arr, 0, $mid);
        $right = array_slice($arr, $mid);

        $left = $this->sort($left);
        $right = $this->sort($right);

        return $this->merge($left, $right);
    }

    public function merge($left, $right)
    {
        $res = [];
        while (count($left) > 0 && count($right) > 0)
        {
            if ($left[0] <= $right[0])
            {
                array_push($res, array_shift($left));
            }
            else
            {
                array_push($res, array_shift($right));
            }
        }

        array_splice($res, count($res), 0, $left);
        array_splice($res, count($res), 0, $right);

        return $res;
    }
}