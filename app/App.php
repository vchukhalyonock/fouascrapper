<?php

namespace App;

use App\Services\Resource;

class App {

    private $_resource;
    private $_messages = [];

    public function __construct() {
        $this->_resource = new Resource(getenv('LOGIN'), getenv('PASSWORD'));
        $this->_resource->getPage(getenv('THEME'));
        $this->_messages = $this->_resource->getMessages();
        $this->_parseAndSave();
    }

    private function _parseAndSave() {
        foreach ($this->_messages as $message) {
            $title = $message->getTitle();
            $date = $message->getDate();
            $author = $message->getAuthor();
            $text = $message->getText();
            if(!empty($text) && !empty($date)) {
                file_put_contents(
                    getenv('RESULTS_PATH') . '/' . $title . '_' . $date,
                    "Title:{$title}\nDate:{$date}\nAuthor:{$author}\nText:{$text}");
            }
        }
    }
}