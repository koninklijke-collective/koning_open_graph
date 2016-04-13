<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'koning_open_graph',
    'Configuration/TypoScript/PageIncludes/',
    'Koning Open Graph - Default Page Includes'
);
