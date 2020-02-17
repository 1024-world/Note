<?php

namespace DesignPattern\Observer\DemoDir;

/**
 * Class Teacher
 * @package DesignPattern\Observer\DemoDir
 * @desc 教师类
 */
class Teacher implements ObserverInterface
{
    private $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function acceptInformation()
    {
        echo 'The teacher received the news' . PHP_EOL;
    }
}