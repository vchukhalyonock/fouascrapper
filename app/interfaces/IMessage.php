<?php

namespace App\Interfaces;

/**
 * Interface IMessage
 * @package App\Interfaces
 */
interface IMessage {

    /**
     * IMessage constructor.
     * @param $message
     */
    public function __construct($message);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @return string
     */
    public function getAuthor();

    /**
     * @return string
     */
    public function getDate();

    /**
     * @return string
     */
    public function getText();
}