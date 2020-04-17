<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Open Graph',
    'description' => 'Manage open graph tags in TYPO3 inside Page Properties',
    'category' => 'plugin',
    'version' => '1.2.4',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Jesper Paardekooper',
    'author_email' => 'j.paardekooper@develement.nl',
    'author_company' => 'DevElement',
    'constraints' => [
        'depends' => [
            'typo3' => '6.2.0-8.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],

    'autoload' => [
        'psr-4' => [
            'Keizer\\KoningOpenGraph\\' => 'Classes',
        ],
    ],
];
