<?php

namespace App\Services;

use App\Interfaces\IHttp;
use App\Interfaces\IResource;

/**
 * Class Resource
 * @package App\Services
 */
class Resource implements IResource {

    /**
     * @var Http
     */
    private $_http;

    /**
     * @var
     */
    private $_response;

    /**
     * @var array
     */
    private $_messages = [];

    /**
     * Resource constructor.
     * @param $login
     * @param $password
     */
    public function __construct($login, $password) {
        $this->_http = new Http();
        $auth = new Auth($this->_http);
        $auth->login($login, $password);
    }

    /**
     * @param $pageUrl
     */
    public function getPage($pageUrl) {
        $themeResource = $this->_http->request(
            $pageUrl,
            IHttp::METHOD_GET
        );

        $this->_response = $themeResource->response;
    }

    /**
     * @return array
     */
    public function getMessages() {
        \phpQuery::newDocumentHTML($this->_response);
        $postsElements = pq('.posts > li');
        $postsElements->each(function ($item) {
            $this->_messages[] = new Message(pq($item));
        });
        return $this->_messages;
    }
}