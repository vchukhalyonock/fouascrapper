<?php

namespace App\Interfaces;

/**
 * Interface ICurl
 * @package App\Interfaces
 */
interface ICurl {

    /**
     * @return \Curl\Curl
     */
    static public function getInstance();
}