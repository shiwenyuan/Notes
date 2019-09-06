<?php
/**
 * https://leetcode-cn.com/problems/implement-queue-using-stacks/submissions/
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/2/27 13341007105@163.com
 * Time: 10:29
 */

class MyQueue
{

    private $stack = [];
    /**
     * Initialize your data structure here.
     */
    function __construct()
    {
    }

    /**
     * Push element x to the back of queue.
     * @param Integer $x
     * @return NULL
     */
    function push($x)
    {
        array_push($this->stack, $x);
    }

    /**
     * Removes the element from in front of queue and returns that element.
     * @return Integer
     */
    function pop()
    {
        return array_shift($this->stack);
    }

    /**
     * Get the front element.
     * @return Integer
     */
    function peek()
    {
        //$key = array_key_first($this->stack);
        return current($this->stack);
    }

    /**
     * Returns whether the queue is empty.
     * @return Boolean
     */
    function empty()
    {
        return empty($this->stack);
    }
}

/**
 * Your MyQueue object will be instantiated and called as such:
 * $obj = MyQueue();
 * $obj->push($x);
 * $ret_2 = $obj->pop();
 * $ret_3 = $obj->peek();
 * $ret_4 = $obj->empty();
 */
