<?php
return [
    'id'=>'Events Manager',
    'basePath'=> realpath(__DIR__ . '/../'),
    'components'=> [
        'urlManager' => [
            'enablePrettyUrl'=> true,
            'showScriptName' => false
        ],
        'request' => [
            'cookieValidationKey' => 'asdfghl',
        ],
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],

];