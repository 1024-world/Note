<?php

namespace Algorithm\Sort\Simple;

/**
 * Class SelectSort
 * @package Algorithm\Sort
 * @desc 选择排序
 *
 * 核心思想：遍历后N-1个数，逐个与第一个数值比较，始终保留最小值的key，
 * 最后将第一个值与最小值进行位置互换。接下来遍历后N-2个数，逐个与第二
 * 个数进行比较，重复上述步骤，直到最后一个数。
 *
 * 平均时间复杂度：O(n^2)，平均空间复杂度：O(1)，算法不稳定
 */
class SelectSort
{
    public function sort($arr = [])
    {
        $len = count($arr);
        if ($len <= 1) {
            return $arr;
        }

        for ($i=0; $i < $len; $i++) { 
            $index = $i;
            for ($j=$i + 1; $j < $len; $j++) {
                if ($arr[$j] < $arr[$index]) {
                    $index = $j;
                }
            }
            if ($index != $i) {
                $tmp = $arr[$i];
                $arr[$i] = $arr[$index];
                $arr[$index] = $tmp;
            }
        }

        return $arr;
    }
}