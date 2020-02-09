<?php

namespace Algorithm;

class autoload
{
    public function __construct()
    {
        require_once dirname(__DIR__) . '/vendor/autoload.php';
        spl_autoload_register('autoload', true, true);
    }
}

