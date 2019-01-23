<?php

namespace App\Services;

use App\Interfaces\IMessage;

class Message implements IMessage {

    private $_message;
    static private $_title = null;

    public function __construct($message) {
        $this->_message = $message;
    }

    public function getDate() {
        return trim($this->_message->find('.date')->text());
    }

    public function getAuthor()
    {
        return trim($this->_message->find('.username.offline.popupctrl')->text());
    }

    public function getText()
    {
        return trim($this->_message->find('.postcontent.restore')->text());
    }

    public function getTitle()
    {
        if(is_null(self::$_title))
            self::$_title = trim($this->_message->find('.title.icon')->text());
        return self::$_title;
    }
}