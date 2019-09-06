<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/2/26 13341007105@163.com
 * Time: 17:27
 */

class TreeNode {
     public $val = null;
     public $left = null;
     public $right = null;
     function __construct($value) { $this->val = $value; }
}

/**
 * @param TreeNode $root
 * @param $sum
 * @return bool
 */
function hasPathSum($root, $sum)
{
    if ($root == null) {
        return false;
    }

    if ($root->left == null && $root->right == null) {
        return $sum - $root->val == 0;
    }

    return hasPathSum($root->left, $sum - $root->val) || hasPathSum($root->right, $sum - $root->val);
}
