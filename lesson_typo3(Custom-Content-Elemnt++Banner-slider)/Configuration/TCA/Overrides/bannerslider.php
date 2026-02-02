<?php

declare(strict_types=1);

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// 1. Add CType
ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Banner Slider',
        'bannerslider',
        'content-special-element'
    ],
    'textmedia',
    'after'
);

// 2. Define fields
$GLOBALS['TCA']['tt_content']['types']['bannerslider'] = [
    'showitem' => '
        --div--;General,
            header,
            assets,
        --div--;Access,
            hidden
    ',
];
