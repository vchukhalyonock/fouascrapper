<?php

namespace App;

use App\Services\Resource;

class App {

    private $_resource;
    private $_page;

    public function __construct() {
        $this->_resource = new Resource(getenv('LOGIN'), getenv('PASSWORD'));
        $this->_resource->getPage(getenv('THEME'));
        $messages = $this->_resource->getMessages();
        
    }
}