<?php

namespace mszl\lib\interfaces;

interface ContextRequest
{
    public function getQuery($name = null, $default = null);

    public function getPost($name = null, $default = null);

    public function getCookie($name = null, $default = null);

    public function getFiles($name = null, $default = null);

    public function getPathInfo(): string;

    public function getMethod(): string;
}