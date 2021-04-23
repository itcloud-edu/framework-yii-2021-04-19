<?php

return [
    'id'=>'Events Manager Console',
    'basePath'=> realpath(__DIR__ . '/../'),
    'components'=>[
        'db'=> require (__DIR__ . '/db.php')
    ]

    ];