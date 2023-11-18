<?php

namespace mszl\lib\utils;

class Api
{
    public static function r(mixed $result, $msg = '', $code = 200): array
    {
        var_dump(date("Y-m-d H:i:s"));
        var_dump(readableDate(time()));
        return compact('code', 'msg', 'result');
    }
}