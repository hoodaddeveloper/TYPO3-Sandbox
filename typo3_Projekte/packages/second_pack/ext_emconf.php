<?php

/**
 * Extension Manager/Repository config file for ext "second_pack".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'second-pack',
    'description' => 'This is  my second package',
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
            'Umbrella\\SecondPack\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Hoodad',
    'author_email' => 'hoodad94@gmail.com',
    'author_company' => 'UMBRELLA',
    'version' => '1.0.0',
];
