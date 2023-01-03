<?php

/**
 * Extension Manager/Repository config file for ext "my_first_sidepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'My First Sidepackage',
    'description' => 'This is a test.',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Ews\\MyFirstSidepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Hoodad',
    'author_email' => 'hoodad94@gmail.com',
    'author_company' => 'EWS',
    'version' => '1.0.0',
];
