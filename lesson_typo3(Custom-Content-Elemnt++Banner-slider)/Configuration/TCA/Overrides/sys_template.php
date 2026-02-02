<?php

declare(strict_types=1);

defined('TYPO3') or die('Access denied.');

call_user_func(function () {
    /**
     * Temporary variables
     */
    $extensionKey = 'lesson_typo3';

    /**
     * Default TypoScript for LessonTypo3
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Lesson Typo3'
    );
});
