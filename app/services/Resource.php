<?php

namespace App\Services;

use App\Interfaces\IHttp;
use App\Interfaces\IResource;

class Resource implements IResource {

    private $_http;

    public function __construct($login, $password) {
        $this->_http = new Http();
        $auth = new Auth($this->_http);
        $auth->login($login, $password);
    }

    public function getPage($pageUrl) {
        $themeResource = $this->_http->request(
            $pageUrl,
            IHttp::METHOD_GET
        );

        return $themeResource->response;
    }
}