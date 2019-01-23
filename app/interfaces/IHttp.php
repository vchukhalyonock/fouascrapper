<?php

namespace App\Interfaces;

/**
 * Interface IHttp
 * @package App\Interfaces
 */
interface IHttp {
    const METHOD_GET = 'get';
    const METHOD_POST = 'post';

    /**
     * @param $url
     * @param string $method
     * @param array $params
     * @return mixed
     */
    public function request($url, $method = self::METHOD_GET, array $params = array());
}