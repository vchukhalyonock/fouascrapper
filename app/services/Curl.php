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
        }

        return self::$_curl;
    }
}