<?php

declare(strict_types=1);
defined('TYPO3') || die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;


ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'Promotion Tour Element',
        'lauraelement',
        'content-special-element'
    ],
    'textmedia',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['lauraelement'] = [
    'showitem' => '
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
            --palette--;;general,
            header;Element Title,
            bodytext;Element Description,
            link;Element Link,
            assets;Element Image 1,
            assets;Element Image 2,
        --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;;frames,
            --palette--;;appearanceLinks,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
            --palette--;;language,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
            --palette--;;hidden,
            --palette--;;access,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
            categories,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
            rowDescription,
        --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
    ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'rows' => 5
            ]
        ]
    ]
];
