<?php

namespace App\Interfaces;

interface IHttp {
    const METHOD_GET = 'get';
    const METHOD_POST = 'post';

    public function request($url, $method = self::METHOD_GET, array $params = array());
}