<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/2/26 13341007105@163.com
 * Time: 17:06
 */


class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;

    function __construct($value)
    {
        $this->val = $value;
    }
}

/**
 * @param TreeNode $p
 * @param TreeNode $q
 * @return bool
 */
function isSameTree($p, $q)
{
    if ($p == null && $q == null) {
        return true;
    }
    if ($p != null && $q != null && $p->val == $q->val) {
        return isSameTree($p->left, $q->left) && isSameTree($p->right, $q->right);
    } else {
        return false;
    }
}
