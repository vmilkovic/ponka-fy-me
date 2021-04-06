<?php

namespace App\Message;

use App\Entity\ImagePost;

class AddPonkaToImage {
    
    private $imagePost;

    public function __construct(ImagePost $imagePost)
    {
        $this->imagePost = $imagePost;
    }

    public function getImagePost(): ImagePost
    {
        return $this->imagePost;
    }
}