<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Open Graph',
    'description' => 'Manage open graph tags in TYPO3 inside Page Properties',
    'category' => 'plugin',
    'version' => '1.2.2',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'author' => 'Jesper Paardekooper',
    'author_email' => 'j.paardekooper@develement.nl',
    'author_company' => 'DevElement',
    'constraints' => array(
        'depends' => array(
            'typo3' => '6.2.0-8.99.99',
        ),
        'conflicts' => array(),
        'suggests' => array(),
    ),
    'autoload' => array(
        'psr-4' => array(
            'Keizer\\KoningOpengraph\\' => 'Classes'
        )
    ),
);
