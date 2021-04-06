<?php

namespace App\MessageHandler;

use App\Photo\PhotoFileManager;
use App\Message\DeleteImagePost;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class DeleteImagePostHandler implements MessageHandlerInterface {

    private $photoManager;
    private $entityManager;

    public function __construct(PhotoFileManager $photoManager, EntityManagerInterface $entityManager)
    {
        $this->photoManager = $photoManager;
        $this->entityManager = $entityManager;
    }

    public function __invoke(DeleteImagePost $deleteImagePost)
    {
        $imagePost = $deleteImagePost->getImagePost();

        $this->photoManager->deleteImage($imagePost->getFilename());

        $this->entityManager->remove($imagePost);
        $this->entityManager->flush();
    }
}