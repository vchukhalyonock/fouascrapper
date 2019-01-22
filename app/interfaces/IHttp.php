<?php

namespace App\Interfaces;

interface IHttp {
    const METHOD_GET = 1;
    const METHOD_POST = 1;

    static public function request($url, $method = self::METHOD_GET, array $params = array());
}