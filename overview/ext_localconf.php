<?php


declare(strict_types=1);

use OverviewWebsite\Overview\Controller\OverviewController;

defined('TYPO3') or die();

(function () {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'overview',
        'Overview',
        [
            OverviewController::class => 'show',
        ],
        []
    );
})();
