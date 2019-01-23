<?php

namespace App\Interfaces;

/**
 * Interface IAuth
 * @package App\Interfaces
 */
interface IAuth {

    /**
     * @param $login
     * @param $password
     * @return mixed
     */
    public function login($login, $password);
}