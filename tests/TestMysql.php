<?php

namespace mszl\lib;

use mszl\lib\utils\Api;
use PHPUnit\Framework\TestCase;

class TestMysql extends TestCase
{
    public function testConnect() {

        var_dump(Api::r('CourseService'));
        $this->assertIsBool(true);
    }
}
