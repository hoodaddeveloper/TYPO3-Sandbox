<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'My First Game',
    'description' => 'This is a game',
    'category' => 'plugin',
    'author' => 'hoodad',
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
