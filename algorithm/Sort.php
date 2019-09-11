<?php

class Sort
{
    /**
     * 冒泡排序
     * 冒泡算法是一个很简单的排序算法，通过每次相邻的两个元素进行比较，如果前面的比后面的大就交换两个元素（也可以比较是否是小，取决于是升序排序还是降序排序），可以理解的是，通过n-1次比较就排序排好了，同时也可以发现不管初始序列的状态如何，冒泡排序的时间复杂都是O(n^2).
     * 1.从第一个开始，比较相邻的两个元素，如果第一个比第二大，则交换
     * 2.对每一相邻元素做相同的工作，从开始第一对到结尾的最后一对，这样第一次就将最大的数放到了数组结尾了
     * 3.针对所有的元素重复以上步骤
     * 4.重复步骤1~3，直到排序完成
     * @param array $arr
     * @return mixed
     */
    public static function bubSort(array $arr): array
    {
        $len = count($arr);
        for ($i = 0; $i < $len; $i++) {
            for ($j = 0; $j < $len -1 - $i; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $tmp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $tmp;
                }
            }
        }
        return $arr;
    }

    /**
     * 选择排序
     * 选择排序是一种简单的排序算法，每次在未排序的序列中选出最小（大）的一个元素，存放到序列的起始位置，然后再从剩余未排序的元素中继续寻找最小（大）元素，放到已排序序列的末尾，以此类推，直到所有元素均排序完成。
     * 1.初始状态：无序区为R[1...n],有序区为空
     * 2.第i趟排序（i=1,2,3...n-1）开始时，当前有序区和无序区分别为R[1...i-1]和R(i..n)。该趟排序从当前无序区中选出关键字最小的记录R[k]，将它与无序区的第1个记录R交换，使R[1..i]和R[i+1..n]分别变为记录个数，增加1个的新有序区和记录个数减少1个的新无序区；
     * 3.n-1趟结束，数组有序化了
     * @param array $arr
     * @return mixed
     */
    public static function selectionSort(array $arr): array
    {
        $len = count($arr);
        for ($i = 0; $i < $len - 1; $i++) {
            $index = $i;
            for ($j = $i + 1; $j < $len; $j++) {
                if ($arr[$j] < $arr[$index]) {
                    $index = $j;
                }
            }
            $tmp = $arr[$i];
            $arr[$i] = $arr[$index];
            $arr[$index] = $tmp;
        }
        return $arr;
    }
    /**
     * 插入排序
     * 插入排序是一种相对也比较简单直观的排序算法，工作原理是通过构建有序序列，对于未排序数据，在已排序序列中从后向前扫描，找到相应位置并插入。
     * 1.从第一个元素，该元素可以认为已经被排序；
     * 2.取出下一个元素，在已经排序的元素中从后向前扫描；
     * 3.如果该元素（已排序的元素）大于新元素，将该元素移到下一位置；
     * 4.重复步骤3，直到找到已排序的元素小于或等于新元素的位置；
     * 5.将新元素插入到该位置;
     * 6.重复步骤2~5.
     * @param $arr
     * @return array
     */
    public static function insertionSort(array $arr): array
    {
        $len = count($arr);
        for ($i = 0; $i < $len; $i++) {
            for ($j=0; $j<$i; $j++) {
                if ($arr[$i] < $arr[$j]) {
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $tmp;
                }
            }
        }
        return $arr;
    }

    /**
     * 快速排序
     * 快速排序（一维数组） 基本思想：在当前无序区R[1..H]中任取一个数据元素作为比较的”基准”(不妨记为X)， 用此基准将当前无序区划分为左右两个较小的无序区：R[1..I-1]和R[I 1..H]，且左边的无序子区中数据元素均小于等于基准元素， 右边的无序子区中数据元素均大于等于基准元素，而基准X则位于最终排序的位置上，即R[1..I-1]≤X.Key≤RI 1..H， 当 R[1..I-1]和R[I 1..H]均非空时，分别对它们进行上述的划分过程，直至所有无序子区中的数据元素均已排序为止。
     * @param $arr
     * @return array
     */
    public static function quickSort(array &$arr): array
    {
        if(count($arr)>1){
            $k=$arr[0];
            $x=array();
            $y=array();
            $_size=count($arr);
            for($i=1;$i<$_size;$i++){
                if($arr[$i]<=$k){
                    $x[]=$arr[$i];
                }elseif($arr[$i]>$k){
                    $y[]=$arr[$i];
                }
            }
            $x=self::quickSort($x);
            $y=self::quickSort($y);
            return array_merge($x,array($k),$y);
        }else{
            return$arr;
        }
    }
}

$arr = [2, 4, 3, 6, 7, 9, 6, 1];
$ret = Sort::bubSort($arr);
var_dump($ret);
$ret = Sort::selectionSort($arr);
var_dump($ret);
$ret = Sort::insertionSort($arr);
var_dump($ret);
$ret = Sort::quickSort($arr);
var_dump($ret);