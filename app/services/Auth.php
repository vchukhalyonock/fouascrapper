<?php

namespace App\Services;

use App\Interfaces\IAuth;
use App\Interfaces\IHttp;

/**
 * Class Auth
 * @package App\Services
 */
class Auth implements IAuth {

    /**
     * @var Http
     */
    private $_http;

    /**
     * @var string
     */
    private $_loginScript;

    /**
     * Auth constructor.
     * @param Http $http
     */
    public function __construct(Http $http) {
        $this->_http = $http;
        $this->_loginScript = getenv('LOGIN_SCRIPT');
    }

    /**
     * @param $login
     * @param $password
     * @return mixed
     */
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