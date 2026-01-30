<?php

declare(strict_types=1);

namespace PromotionTourWebsite\PromotionEvents\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use PromotionTourWebsite\PromotionEvents\Domain\Model\Event;
use PromotionTourWebsite\PromotionEvents\Domain\Repository\EventRepository;

class EventsController extends ActionController
{


    public function __construct(protected EventRepository  $eventRepository)
    {
        $this->eventRepository = $eventRepository;
    }
    public function upcomingAction(): ResponseInterface
    {

        $upcomingEvents = $this->eventRepository->findUpcoming();
        $this->view->assign('upcomingEvents', $upcomingEvents);
        return $this->htmlResponse();
    }

    public function detailAction(Event $event): ResponseInterface
    {
        $this->view->assign('event', $event);
        return $this->htmlResponse();
    }
}
