<?php

namespace App\Services;

use App\Interfaces\IHttp;

/**
 * Class Http
 * @package App\Services
 */
class Http implements IHttp {

    /**
     * @var \Curl\Curl|null
     */
    private $_curl;

    /**
     * Http constructor.
     */
    public function __construct() {
        $this->_curl = Curl::getInstance();
    }

    /**
     * @param $url
     * @param string $method
     * @param array $params
     * @return mixed
     */
    public function request($url, $method = self::METHOD_GET, array $params = array()) {
        return $this->_curl->$method($url, $params);
    }
}