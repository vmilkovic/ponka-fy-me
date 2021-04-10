<?php

namespace App\Message\Event;

class ImagePostDeletedEvent {

    private $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function getFilename()
    {
        return $this->filename;
    }
}