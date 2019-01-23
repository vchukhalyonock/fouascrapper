<?php

namespace App\Services;

use App\Interfaces\IMessage;

class Message implements IMessage {

    private $_message;

    public function __construct($messageText) {
        $this->_message = $messageText;
    }

    public function getDate()
    {
        // TODO: Implement getDate() method.
    }

    public function getAuthor()
    {
        // TODO: Implement getAuthor() method.
    }

    public function getText()
    {
        // TODO: Implement getText() method.
    }

    public function getTitle()
    {
        // TODO: Implement getTitle() method.
    }
}