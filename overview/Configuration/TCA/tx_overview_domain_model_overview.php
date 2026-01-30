<?php


declare(strict_types=1);



return [
    'ctrl' => [
        'title' => 'About Overview',
        'label' => 'title',
        'label_alt' => 'overview, description',
        'label_alt_force' => true,
        'default_sortby' => 'overview DESC',
        'iconfile' => 'EXT: overview/Resources/Public/Icons/tx_overview_domain_model_overview.svg',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        // TODO:Understand enablecolumns
        // 'enablecolumns' => [
        //     'disabled' => 'hidden',
        //     'starttime' => 'starttime',
        //     'endtime' => 'endtime',
        // ],
        'searchFields' => 'title,description',
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
                    ],
                ],
            ],
        ],
        'firstheade' => [
            'exclude' => true,
            'label' => 'Headline Nehad Field',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim',
            ],
        ],
        'firstsubhead' => [
            'exclude' => true,
            'label' => 'Subheadline Nehad Field',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'firstimage' => [
            'exclude' => true,
            'label' => 'First Image',
            'config' => [
                'type' => 'file',
                'allowed' => 'jpg,jpeg,png,webp',
                'maxitems' => 1,
            ],
        ],

        'secondheade' => [
            'exclude' => true,
            'label' => 'Headline Nehad Field',
            'config' => [
                'type' => 'input',
                'size' => 50,
                'eval' => 'trim',
            ],
        ],
        'secondsubhead' => [
            'exclude' => true,
            'label' => 'Second Subheadline Nehad Field',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
            ],
        ],
        'secondimage' => [
            'exclude' => true,
            'label' => 'Second Image',
            'config' => [
                'type' => 'file',
                'allowed' => 'jpg,jpeg,png,webp',
                'maxitems' => 1,
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
            ],
        ],
        'overview' => [
            'exclude' => false,
            'label' => 'Date of the Event',
            'config' => [
                'type' => 'datetime',
                'format' => 'date',
                'required' => true,
                'default' => 0,
            ],
        ],
        'firstfacebookurl' => [
            'exclude' => false,
            'label' => 'Facebook Link',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'appearance' => [
                    'enableBrowser' => true,
                ],
                'placeholder' => 'https://facebook.com/yourpage',
            ],
        ],
        'firsttwitterurl' => [
            'exclude' => false,
            'label' => 'Twitter Link',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'appearance' => [
                    'enableBrowser' => true,
                ],
                'placeholder' => 'https://twitter.com/yourprofile',
            ],
        ],
        'firstinstagramurl' => [
            'exclude' => false,
            'label' => 'Instagram Link',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'appearance' => [
                    'enableBrowser' => true,
                ],
                'placeholder' => 'https://instagram.com/yourprofile',
            ],
        ],
        'firstlinkedinurl' => [
            'exclude' => false,
            'label' => 'LinkedIn Link',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'appearance' => [
                    'enableBrowser' => true,
                ],
                'placeholder' => 'https://linkedin.com/in/yourprofile',
            ],
        ],
        'firstyoutubeurl' => [
            'exclude' => false,
            'label' => 'YouTube Link',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'appearance' => [
                    'enableBrowser' => true,
                ],
                'placeholder' => 'https://youtube.com/yourchannel',
            ],
        ],

        'secondfacebookurl' => [
            'exclude' => false,
            'label' => 'Facebook Link',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'appearance' => [
                    'enableBrowser' => true,
                ],
                'placeholder' => 'https://facebook.com/yourpage',
            ],
        ],
        'secondtwitterurl' => [
            'exclude' => false,
            'label' => 'Twitter Link',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'appearance' => [
                    'enableBrowser' => true,
                ],
                'placeholder' => 'https://twitter.com/yourprofile',
            ],
        ],
        'secondinstagramurl' => [
            'exclude' => false,
            'label' => 'Instagram Link',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'appearance' => [
                    'enableBrowser' => true,
                ],
                'placeholder' => 'https://instagram.com/yourprofile',
            ],
        ],
        'secondlinkedinurl' => [
            'exclude' => false,
            'label' => 'LinkedIn Link',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'appearance' => [
                    'enableBrowser' => true,
                ],
                'placeholder' => 'https://linkedin.com/in/yourprofile',
            ],
        ],
        'secondyoutubeurl' => [
            'exclude' => false,
            'label' => 'YouTube Link',
            'config' => [
                'type' => 'link',
                'allowedTypes' => ['url'],
                'appearance' => [
                    'enableBrowser' => true,
                ],
                'placeholder' => 'https://youtube.com/yourchannel',
            ],
        ],

    ],
    'types' => [
        '0' => [
            'showitem' => '

              --div;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                    title,
                    --palette--;;firstHeaderPalette,
                    --linebreak--,
                    --palette--;;secondHeaderPalette,
                    --linebreak--,
                    description,
                --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                    hidden,
      
            ',
        ],
    ],
    'palettes' => [
        'firstHeaderPalette' => [
            'label' => 'First Header car',
            'showitem' => 'firstheade, firstsubhead, firstimage ,
            --linebreak--,
            firstfacebookurl, 
            firsttwitterurl,
             firstinstagramurl, 
             firstlinkedinurl,
             firstyoutubeurl',
        ],
        'secondHeaderPalette' => [
            'label' => 'Second Header car',
            'showitem' => 'secondheade, secondsubhead, secondimage',
        ],
        // 'eventPalette' => [
        //     'label' => 'Event Info',
        //     'order' => '1',
        //     'showitem' => 'overview, promotiontime,, description,, descriptionlink'
        // ]
    ],
];
