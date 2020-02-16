<?php

namespace DesignPattern\Singleton;

/**
 * Class Singleton
 * @package DesignPattern\Singleton
 * @desc 单例模式
 */
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