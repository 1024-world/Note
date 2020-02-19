<?php

namespace Algorithm\Sort\Simple;

/**
 * Class HeapSort
 * @package Algorithm\Sort
 * @desc 堆排序
 */
class HeapSort
{
    public function sort($arr = [])
    {
        $size = count($arr);
        $this->buildHeap($arr, count($arr));

        for ($i = $size - 1; $i > 0; $i--) {
            $this->swap($arr,$i,0);
            $size--;
            $this->buildHeap($arr,$size);
        }

        return $arr;
    }

    /**
     * @desc 构建堆
     * @param $arr
     * @param $size
     */
    private function buildHeap(&$arr, $size)
    {
        $index = intval($size/2)-1;
        for (; $index >= 0; $index--)
        {
            if ($index*2+1 < $size) {
                $maxIndex = $index*2+1;
                if ($index*2+2 < $size && $arr[$maxIndex] < $arr[$index*2+2]) {
                    $maxIndex = $index*2+2;
                }

                if ($arr[$maxIndex] > $arr[$index]) {
                    $this->swap($arr, $index, $maxIndex);
                }
            }
        }
    }

    /**
     * @desc 数据交换
     * @param $arr
     * @param $minIndex
     * @param $maxIndex
     */
    private function swap(&$arr, $minIndex, $maxIndex)
    {
        $tmp = $arr[$minIndex];
        $arr[$minIndex] = $arr[$maxIndex];
        $arr[$maxIndex] = $tmp;
    }
}