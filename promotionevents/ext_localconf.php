<?php

declare(strict_types=1);

defined('TYPO3') or die();

(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'promotionevents',
        'Upcoming',
        [
            \PromotionTourWebsite\PromotionEvents\Controller\EventsController::class => 'upcoming,detail',
        ],
        []
    );
})();
