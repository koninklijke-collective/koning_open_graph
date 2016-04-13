<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied');
}

$columns = array(
    'tx_koningopengraph_type' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:koning_opengraph/Resources/Private/Language/locallang_be.xlf:pages.tx_koningopengraph_type',
        'config' => array(
            'type' => 'input'
        )
    ),
    'tx_koningopengraph_title' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:koning_opengraph/Resources/Private/Language/locallang_be.xlf:pages.tx_koningopengraph_title',
        'config' => array(
            'type' => 'input'
        )
    ),
    'tx_koningopengraph_description' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:koning_opengraph/Resources/Private/Language/locallang_be.xlf:pages.tx_koningopengraph_description',
        'config' => array(
            'type' => 'text'
        )
    ),
    'tx_koningopengraph_image' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:koning_opengraph/Resources/Private/Language/locallang_be.xlf:pages.tx_koningopengraph_image',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'tx_koningopengraph_image',
            array(
                'minitems' => 0,
                'maxitems' => 1,
            ),
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('pages', $columns);
$showItem = '--div--;LLL:EXT:koning_opengraph/Resources/Private/Language/locallang_be.xlf:pages.tab.og,
    tx_koningopengraph_type, tx_koningopengraph_title, tx_koningopengraph_description, tx_koningopengraph_image';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('pages', $showItem);
