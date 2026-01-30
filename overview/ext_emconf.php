<?php

declare(strict_types=1);

$_EXTKEY = $_EXTKEY ?? 'overview';

$EM_CONF[$_EXTKEY] = [
    'title' => 'Overview about ',
    'description' => 'An overview extension to show upcoming events.',
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
