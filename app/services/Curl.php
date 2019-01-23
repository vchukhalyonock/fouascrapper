<?php

namespace App\Services;

use App\Interfaces\ICurl;

class Curl implements ICurl {

    static public $_curl = null;

    private function __construct(){
    }

    static public function getInstance() {
        if(is_null(self::$_curl)) {
            self::$_curl = new \Curl\Curl();
            self::$_curl->setOpt(CURLOPT_HEADER, 0);
            self::$_curl->setOpt(CURLOPT_REFERER, getenv('LOGIN_SCRIPT'));
            self::$_curl->setOpt(CURLOPT_COOKIEFILE, getenv('COOKIE_FILE_PATH'));
            self::$_curl->setOpt(CURLOPT_COOKIESESSION, true);
            self::$_curl->setHeader(
                'User-Agent',
                'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2357.132 Safari/537.36'
            );
            self::$_curl->setOpt(CURLOPT_FOLLOWLOCATION, 1);
        }

        return self::$_curl;
    }
}