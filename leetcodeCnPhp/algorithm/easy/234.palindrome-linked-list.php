<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/2/25 13341007105@163.com
 * Time: 16:41
 */

/**
 * https://leetcode-cn.com/problems/palindrome-linked-list/submissions/
 * @param ListNode $head
 * @return Boolean
 */
function isPalindrome($head)
{
    if ($head->val === null) {
        return true;
    }
    if ($head->next === null) {
        return true;
    }
    $x = [];
    while ($head->val !== null) {
        $x[] = strval($head->val);
        if ($head->next == null) {
            break;
        }
        $head = $head->next;
    }
    $len = count($x);
    $count = intval($len / 2);
    for ($i = 0; $i < $count; $i++) {
        if ($x[$i] != $x[$len - $i - 1]) {
            return false;
        }
    }
    return true;
}


class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val)
    {
        $this->val = $val;
    }
}