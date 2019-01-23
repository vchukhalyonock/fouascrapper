<?php

namespace App\Services;

use App\Interfaces\IHttp;
use App\Interfaces\IResource;

class Resource implements IResource {

    private $_http;
    private $_response;
    private $_messages = [];

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

        $this->_response = $themeResource->response;
    }

    public function getMessages() {
        \phpQuery::newDocumentHTML($this->_response);
        $postsElements = pq('.posts > li');
        $postsElements->each(function ($item) {
            $this->_messages[] = new Message($item->nodeValue);
        });
        return $this->_messages;
    }
}