<?php

namespace mszl\lib\traits;
trait DynamicParamsSingleton
{
    private static mixed $instance;

    private function __construct() {

    }

    public static function getInstance() {
        $args = func_get_args();
        $key = md5(serialize($args));
        return self::$instance[$key] ?? self::$instance[$key] = new self(...$args);
    }

    private function __clone() {
        // 私有克隆方法以防止克隆对象
    }
}