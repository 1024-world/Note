<?php

namespace DesignPattern\Observer\DemoDir;

/**
 * Class Peasant
 * @package DesignPattern\Observer\DemoDir
 * @desc 农民类
 */
class Peasant implements ObserverInterface
{
    private $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->attach($this);
    }

    public function acceptInformation()
    {
        echo 'The farmer received the news.' . PHP_EOL;
    }
}