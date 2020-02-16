<?php

namespace Algorithm\Sort\Simple;

/**
 * Class InsertSort
 * @package Algorithm\Sort
 * @desc 插入排序
 *
 * 核心思想：前N-1个数据已经排好序，现在将第N个数插入到前面的有序数列中，
 * 使得这N个数也是排好序的，如此反复循环，直到全部排好顺序。
 *
 * 平均时间复杂度：O(n2)
 */
class InsertSort
{
    public function sort($arr = [])
    {
        $len = count($arr);
        if ($len <= 1)
            return $arr;

        for ($i=0; $i < $len - 1; $i++) { 
            for ($j=$i+1; $j > 0 ; $j--) { 
                if ($arr[$j] < $arr[$j-1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j-1];
                    $arr[$j-1] = $tmp;
                } else {
                    break;
                }
            }
        }

        return $arr;
    }
}