<?php

namespace App\Message;

class DeletePhotoFile {

    private $filename;

    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    public function getFilename(): string  {
        return $this->filename;
    }
}