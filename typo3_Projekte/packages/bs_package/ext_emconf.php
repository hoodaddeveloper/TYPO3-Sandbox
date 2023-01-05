<?php

/**
 * Extension Manager/Repository config file for ext "bs_package".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'BS-package',
    'description' => 'Cloning a bootstrap template',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Hoodad\\BsPackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Hoodad',
    'author_email' => 'hoodad94@gmail.com',
    'author_company' => 'hoodad',
    'version' => '1.0.0',
];
