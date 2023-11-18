<?php

namespace mszl\lib\interfaces;

interface Course extends Tags,Timer
{
    public function getChapters():array;
}