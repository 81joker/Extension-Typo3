<?php


$EM_CONF[$_EXTKEY] = [
    'title' => 'Promotion Tour: Upcoming Events',
    'description' => 'Manage upcoming events and display them on your website',
    'category' => 'fe',
    'author' => 'Nehad Altimimi',
    'author_email' => 'nehad@gmail.com',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' =>
        [
            'typo3' => '12.4.0-12.4.99',
        ],

        'conflicts' => [],
        'suggests' => [],
    ],
];
