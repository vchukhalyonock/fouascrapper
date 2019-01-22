<?php

namespace App;

use App\Services\Auth;

class App {


    private $_login;
    private $_password;

    public function __construct() {
        $this->_login = getenv('LOGIN');
        $this->_password = getenv('PASSWORD');
    }

    public function login() {
        $auth = new Auth();
        $resource = $auth->login($this->_login, $this->_password);
        var_dump($resource->response);
    }
}