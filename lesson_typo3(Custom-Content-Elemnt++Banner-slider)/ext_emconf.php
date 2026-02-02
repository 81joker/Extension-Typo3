<?php

declare(strict_types=1);

/**
 * Extension Manager/Repository config file for ext "lesson_typo3".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Lesson Typo3',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'NehadAltimimi\\LessonTypo3\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Nehad',
    'author_email' => 'tim26618@gmail.com',
    'author_company' => 'Nehad Altimimi',
    'version' => '1.0.0',
];
