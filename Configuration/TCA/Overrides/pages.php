<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

if (!defined('TYPO3_MODE')) {
    die('Access denied');
}

ExtensionManagementUtility::addTCAcolumns('pages', [
    'tx_koningopengraph_type' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:koning_open_graph/Resources/Private/Language/locallang_be.xlf:pages.tx_koningopengraph_type',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
            'size' => 15,
            'wizards' => [
                'type_picker' => [
                    'type' => 'select',
                    'mode' => '',
                    'title' => '-- Predefined types --',
                    'items' => \Keizer\KoningOpenGraph\Helper\TableContentHelper::getOpenGraphTypesForTcaSelect(),
                ],
            ],
        ],
    ],
    'tx_koningopengraph_title' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:koning_open_graph/Resources/Private/Language/locallang_be.xlf:pages.tx_koningopengraph_title',
        'config' => [
            'type' => 'input',
            'eval' => 'trim',
        ],
    ],
    'tx_koningopengraph_description' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:koning_open_graph/Resources/Private/Language/locallang_be.xlf:pages.tx_koningopengraph_description',
        'config' => [
            'type' => 'text',
            'eval' => 'trim',
        ],
    ],
    'tx_koningopengraph_image' => [
        'exclude' => 1,
        'label' => 'LLL:EXT:koning_open_graph/Resources/Private/Language/locallang_be.xlf:pages.tx_koningopengraph_image',
        'config' => ExtensionManagementUtility::getFileFieldTCAConfig(
            'tx_koningopengraph_image',
            [
                'minitems' => 0,
                'maxitems' => 1,
            ],
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        ),
    ],
]);
ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'koning_open_graph',
    'tx_koningopengraph_type, --linebreak--, tx_koningopengraph_title, --linebreak--, tx_koningopengraph_description, --linebreak--, tx_koningopengraph_image'
);

// Make sure palette label is shown
$GLOBALS['TCA']['pages']['palettes']['koning_open_graph']['canNotCollapse'] = 1;

ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--palette--;LLL:EXT:koning_open_graph/Resources/Private/Language/locallang_be.xlf:pages.palette.og;koning_open_graph',
    '',
    'after:description'
);
