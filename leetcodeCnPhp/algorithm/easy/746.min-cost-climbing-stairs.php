<?php
/**
 * https://leetcode-cn.com/problems/min-cost-climbing-stairs/submissions/
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/2/26 13341007105@163.com
 * Time: 18:59
 */

function minCostClimbingStairs($cost) {
    $count = count($cost);
    $l1 = $cost[0];
    $l2 = $cost[1];
    for ($i=2;$i<$count;$i++) {
        $tmp = $l2;
        $l2 = $l2 > $l1 ? $l1 + $cost[$i] : $l2 + $cost[$i];
        $l1 = $tmp;
    }
    return $l1 > $l2 ? $l2 : $l1;
}