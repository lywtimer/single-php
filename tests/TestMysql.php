<?php

namespace mszl\lib;

use mszl\lib\types\UserProfile;
use mszl\lib\utils\Api;
use PHPUnit\Framework\TestCase;

class TestMysql extends TestCase
{
    public function testConnect() {

        var_dump(Api::r(new UserProfile()));
        $this->assertIsBool(true);
    }
}
