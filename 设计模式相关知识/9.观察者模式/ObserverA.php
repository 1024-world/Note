<?php

namespace DesignPattern\Observer;

class ObserverA implements ObserverInterface
{
    public function __construct(Subject $subject)
    {
        $subject->attach($this);
    }

    public function update()
    {
        # code...
    }
}