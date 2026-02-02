<?php

declare(strict_types=1);

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Book Quote',
        'bookquote',
        'content-text'
    ]
);

$GLOBALS['TCA']['tt_content']['types']['bookquote'] = [
    'showitem' => '
        --div--;General,
            header;Author,
            bodytext;Quote,
            assets;Author Image,
        --div--;Appearance,
            --palette--;frames,
            --palette--;appearanceLinks,
        --div--;Access,
            --palette--;hidden,
            --palette--;access
    ',
];
