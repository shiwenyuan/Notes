<?php
/**
 * 将两个有序链表合并为一个新的有序链表并返回。新链表是通过拼接给定的两个链表的所有节点组成的。 
 * 示例：
 * 输入：1->2->4, 1->3->4
 * 输出：1->1->2->3->4->4
 */
class Solution
{
    public function mergeTwoLists($p1, $p2)
    {
        if ($p1 == null) {
            return $p2;
        }
        if ($p2 == null) {
            return $p1;
        }
        //取较小的为链表的头部
        if ($p1->val >= $p2->val) {
            $head = $p2;
            //将p2的头部指针后移一位
            $p2 = $p2->next;
        } else {
            $head = $p1;
            $p1 = $p1->next;
        }
        //php中对象的复制，其实就是引用操作，$head和$p其实指向的是同一个内存，所以对$p增加节点同时也会对$head产生影响
        //此操作其实就是将$P的指针指向新链表的头部，此后随着新链表中节点的增加$p的指针也不断的向后移动，但是$head的指针却依然指向链表头部
        $p = $head;
        //循环比较大小
        while ($p1 && $p2) {
            if ($p1->val >= $p2->val) {
                //链表增加（将第一个节点的指针指向$p2的第一个节点）
                $p->next = $p2;
                //指针后移
                $p2 = $p2->next;
            } else {
                $p->next = $p1;
                $p1 = $p1->next;
            }
            //工作指针后移
            $p = $p->next;
        }
        //将指针指向链表剩下的部分
        if ($p1 == null) {
            $p->next = $p2;
        }
        if ($p2 == null) {
            $p->next = $p1;
        }
        return $head;
    }
}
