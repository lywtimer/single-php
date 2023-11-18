<?php

namespace mszl\lib\service;


use mszl\lib\traits\DynamicParamsSingleton;

class CourseService
{
    use DynamicParamsSingleton;


    public function getHello(): string
    {
        return 'hello';
    }
}