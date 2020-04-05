<?php

namespace Algorithm\Sort\Simple;

/**
 * Class ShellSort
 * @package Algorithm\Sort
 * @desc 希尔排序
 *
 * 平均时间复杂度 O(N*logN), 平均空间复杂度 O(1), 算法不稳定
 */
class ShellSort
{
    public function sort($arr = [])
    {
        $length=count($arr);
        $gap=floor($length/2);

        for (; $gap >0 ; $gap=floor($gap/2))
        {
            for ($i=1; $i*$gap <$length ; $i++)
            {
                $tmp=$arr[$i*$gap];
                for ($j=$i-1; $j >=0 ; $j--)
                {
                    if($tmp<$arr[$j*$gap]){
                        $arr[($j+1)*$gap]=$arr[$j*$gap];
                        $arr[$j*$gap]=$tmp;
                    }else{
                        break;
                    }
                }
            }
        }

        return $arr;
    }
}

