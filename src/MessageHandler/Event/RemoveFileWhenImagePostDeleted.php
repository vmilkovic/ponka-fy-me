<?php

namespace App\MessageHandler\Event;

use App\Photo\PhotoFileManager;
use App\Message\Event\ImagePostDeletedEvent;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class RemoveFileWhenImagePostDeleted implements MessageHandlerInterface {

    private $photoFileManager;

    public function __construct(PhotoFileManager $photoFileManager)
    {
        $this->photoFileManager = $photoFileManager;
    }

    public function __invoke(ImagePostDeletedEvent $event)
    {
        $this->photoFileManager->deleteImage($event->getFilename());
    }
}