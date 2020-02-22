<?php

namespace PHP\AutoloadingClasses;

/**
 * Class Client
 * @package PHP\AutoloadingClasses
 * @desc 自动加载模块客户端
 */
class Client
{
    public function __construct()
    {
        new Demo();
    }
}

(new Client());

// 注册自动加载器
spl_autoload_register(function($className) {
    // 定义项目根目录
    $baseDir = '/root/data/share/Work/';
    // 命名空间符号替换
    $classDir = str_replace('\\', '/', $className);
    // 加载文件
    require_once $baseDir . $classDir . '.php';
});