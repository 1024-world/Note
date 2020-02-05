<?php

namespace DesignPattern\Observer;

class ObserverB implements ObserverInterface
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