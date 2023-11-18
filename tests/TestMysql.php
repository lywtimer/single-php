<?php

namespace mszl\lib;

use mszl\lib\service\CourseService;
use PHPUnit\Framework\TestCase;

class TestMysql extends TestCase
{
    public function testConnect() {

        echo CourseService::getInstance()->getHello();
        $this->assertIsBool(true);
    }
}
