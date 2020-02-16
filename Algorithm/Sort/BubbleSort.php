<?php

namespace Algorithm\Sort;

/**
 * Class BubbleSort
 * @package Algorithm\Sort
 * @desc 冒泡排序
 *
 * 核心思想：相邻的两个数比较大小，较大的数冒起来。
 * 从前向后两两比较，一直比较到最后两个数据，此时最大的数据被交换到了
 * 最后一个位置，这样第一个最大数的位置就排好了。重复上述步骤，
 * 将第二个、第三个直到最后一个最大数排好位置。
 *
 * 平均时间复杂度：O(n2)
 */
class BubbleSort
{
    public function sort($arr = [])
    {
        $len = count($arr);
        if ($len <= 1)
            return $arr;

        for ($i=0; $i < $len-1; $i++) {
            for ($j=0; $j < $len - $i - 1; $j++) {
                
                if ($arr[$j] > $arr[$j+1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j+1];
                    $arr[$j+1] = $tmp;
                }
            }
        }

        return $arr;
    }
}