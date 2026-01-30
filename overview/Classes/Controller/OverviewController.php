<?php

declare(strict_types=1);

namespace OverviewWebsite\Overview\Controller;

use OverviewWebsite\Overview\Domain\Repository\OverviewRepository;
use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class OverviewController extends ActionController
{
    public function __construct(protected OverviewRepository  $overviewRepository)
    {
        $this->overviewRepository = $overviewRepository;
    }
    public function showAction(): ResponseInterface
    {

        $abouts = $this->overviewRepository->findUpcoming();
        $this->view->assign('abouts', $abouts);
        return $this->htmlResponse();
    }
}
