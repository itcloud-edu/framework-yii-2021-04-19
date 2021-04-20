<?php
return [
    'id'=>'Events Manager',
    'basePath'=> realpath(__DIR__ . '/../'),
    'components'=> [
        'urlManager' => [
            'enablePrettyUrl'=> true,
            'showScriptName' => false
        ]
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],

];