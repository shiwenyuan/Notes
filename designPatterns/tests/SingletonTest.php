<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/8/23 13341007105@163.com
 * Time: 15:25
 */

use \PHPUnit\Framework\TestCase;
use DesignPatterns\Singleton\Singleton;

class SingletonTest extends TestCase
{
    public function testSignleton()
    {
        $firstCall = Singleton::getInstance();
        $secondCall = Singleton::getInstance();
        $this->assertInstanceOf(Singleton::class, $firstCall);
        $this->assertSame($firstCall, $secondCall);
    }
}