<?php

namespace App\Services;

use App\Interfaces\IAuth;
use App\Interfaces\IHttp;

class Auth implements IAuth {

    private $_http;
    private $_loginScript;

    public function __construct(Http $http) {
        $this->_http = $http;
        $this->_loginScript = getenv('LOGIN_SCRIPT');
    }

    public function login($login, $password) {
        return $this->_http->request(
            $this->_loginScript,
            IHttp::METHOD_POST,
            [
                'login' => $login,
                'password' => $password,
                'do' => 'login'
            ]
        );
    }
}