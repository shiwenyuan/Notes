<?php
/**
 * Created by PhpStorm.
 * User: shiwenyuan
 * Date: 2019/8/23 13341007105@163.com
 * Time: 19:40
 */
namespace DesignPatterns\SimpleFactory{

    class SimpleFactory
    {
        public static function create($msg_provider)
        {
            switch ($msg_provider) {
                case 'sms':
                    return new SmsMsg();
                case 'wx':
                    return new WxMsg();
                default:
                    return new EmailMsg();
            }
        }
    }
    class SmsMsg
    {
        private $name = 'sms';
    }
    class WxMsg
    {
        private $name = 'wx';
    }
    class EmailMsg
    {
        private $name = 'email';
    }
}
