<?php

namespace DesignPattern\Observer\DemoDir;

/**
 * Class Client
 * @package DesignPattern\Observer\DemoDir
 * @desc 观察者示例代码客户端
 */
class Client
{
    public function index()
    {
        $subject = new Subject();

        new Peasant($subject);
        new Teacher($subject);

        $subject->setStatus(2);
    }
}

require_once dirname(__DIR__) . '/../../vendor/autoload.php';

(new Client())->index();