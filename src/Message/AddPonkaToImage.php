<?php

namespace App\Message;

class AddPonkaToImage {
    
    private $imagePostId;

    public function __construct(int $imagePostId)
    {
        $this->imagePostId = $imagePostId;
    }

    public function getImagePost(): int
    {
        return $this->imagePostId;
    }
}