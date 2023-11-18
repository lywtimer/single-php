<?php

namespace mszl\lib\utils;

class Api
{
    public static function r(mixed $result, $msg = '', $code = 200): array
    {
        return compact('code', 'msg', 'result');
    }
}