<?php

namespace DesignPattern\Singleton;

class Singleton {

    protected static $instance = NULL;

    private function __construct() {}

    public function __clone() {}

    public static function getInstance() {

        if (self::$instance == NULL) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}