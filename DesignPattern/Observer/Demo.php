<?php

namespace DesignPattern\Observer;

class Demo
{
    public function index()
    {
        $subject = new Subject();

        $observerA = new ObserverA($subject);
        $observerB = new ObserverB($subject);

        $subject->setStatus(true);
    }
}

(new Demo)->index();