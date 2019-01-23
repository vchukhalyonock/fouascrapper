<?php

namespace App\Services;

use App\Interfaces\IMessage;

/**
 * Class Message
 * @package App\Services
 */
class Message implements IMessage {

    /**
     * @var
     */
    private $_message;

    /**
     * @var null
     */
    static private $_title = null;

    /**
     * Message constructor.
     * @param $message
     */
    public function __construct($message) {
        $this->_message = $message;
    }

    /**
     * @return string
     */
    public function getDate() {
        return trim($this->_message->find('.date')->text());
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return trim($this->_message->find('.username.offline.popupctrl')->text());
    }

    /**
     * @return string
     */
    public function getText()
    {
        return trim($this->_message->find('.postcontent.restore')->text());
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        if(is_null(self::$_title))
            self::$_title = trim($this->_message->find('.title.icon')->text());
        return self::$_title;
    }
}