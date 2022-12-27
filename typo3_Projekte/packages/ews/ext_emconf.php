<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'my first plugin',
    'description' => 'yes baby',
    'category' => 'plugin',
    'author' => 'Hoodi',
    'author_email' => 'hoodad94@gmail.com',
    'state' => 'alpha',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
