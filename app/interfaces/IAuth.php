<?php

namespace App\Interfaces;

interface IAuth {
    public function login($login, $password);
}