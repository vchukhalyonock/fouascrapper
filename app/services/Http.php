<?php

namespace App\Services;

use App\Interfaces\IHttp;

class Http implements IHttp {

    private $_curl;

    public function __construct() {
        $this->_curl = Curl::getInstance();
    }

    public function request($url, $method = self::METHOD_GET, array $params = array()) {
        return $this->_curl->$method($url, $params);
    }
}