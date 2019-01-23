<?php

namespace App\Interfaces;

/**
 * Interface IResource
 * @package App\Interfaces
 */
interface IResource {

    /**
     * @param $pageUrl
     * @return void
     */
    public function getPage($pageUrl);

    /**
     * @return array
     */
    public function getMessages();
}