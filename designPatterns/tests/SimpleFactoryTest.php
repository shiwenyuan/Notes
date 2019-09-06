<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/8/23 13341007105@163.com
 * Time: 19:45
 */
use \PHPUnit\Framework\TestCase;
use DesignPatterns\SimpleFactory\SimpleFactory;
class SimpleFactoryTest extends TestCase
{
    public function testSimpleFactoryCreate()
    {
        $sms_class = SimpleFactory::create('sms');
        $wx_class = SimpleFactory::create('wx');
        $un_know_class = SimpleFactory::create('');
        $this->assertInstanceOf(\DesignPatterns\SimpleFactory\SmsMsg::class, $sms_class);
        $this->assertInstanceOf(\DesignPatterns\SimpleFactory\WxMsg::class, $wx_class);
        $this->assertInstanceOf(\DesignPatterns\SimpleFactory\EmailMsg::class, $un_know_class);
    }
}