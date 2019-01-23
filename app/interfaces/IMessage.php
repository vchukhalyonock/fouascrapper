<?php

namespace App\Interfaces;

interface IMessage {

    public function __construct($messageText);
    public function getTitle();
    public function getAuthor();
    public function getDate();
    public function getText();
}