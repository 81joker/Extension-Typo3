<?php
return [
    'ctrl' => [
        'title' => 'Promotion Tour Events',
        'label' => 'title',
        'label_alt' => 'promotiondate,location',
        'label_alt_force' => true,
        'default_sortby' => 'promotiondate DESC',
        'iconfile' => 'EXT: promotionevents/Resources/Public/Icons/tx_promotionevents_domain_model_event. svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'searchFields' => 'title,description,location',
        'security' => [
            'ignorePageTypeRestriction' => true,
        ],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL: EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                        'invertStateDisplay' => false,
                    ]
                ],
            ],
        ],
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'datetime',
                'format' => 'datetime',
                'default' => 0,
            ],
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general. xlf:LGL.endtime',
            'config' => [
                'type' => 'datetime',
                'format' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ],
            ],
        ],
        'title' => [
            'exclude' => false,
            'label' => 'Title',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 200,
                'required' => true,
                'eval' => 'trim',
            ],
        ],
        'description' => [
            'exclude' => false,
            'label' => 'Additional information',
            'config' => [
                'type' => 'text',
                'cols' => 80,
                'rows' => 15,
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ]
        ],
        'promotiondate' => [
            'exclude' => false,
            'label' => 'Date of the Event',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'required' => true,
                'default' => 0,
            ]
        ],
        'promotiontime' => [
            'exclude' => false,
            'label' => 'Start time of the Event',
            'config' => [
                'type' => 'datetime',
                'format' => 'time',
                'required' => true,
                'default' => 0,
            ]
        ],
        'location' => [
            'exclude' => false,
            'label' => 'Location',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'max' => 200,
                'required' => true,
                'eval' => 'trim',
            ],
        ],
        'locationlink' => [
            'exclude' => false,
            'label' => 'Optional Link to the location',
            'config' => [
                'type' => 'link',
                'size' => 50,
                'allowedTypes' => ['page', 'url', 'mail'],
                'appearance' => [
                    'enableBrowser' => true,
                ],
            ]
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => '
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,
                    promotiondate,
                    promotiontime,
                    location,
                    locationlink,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,
                    starttime,
                    endtime,
            '
        ]
    ],
    'palettes' => []
];
