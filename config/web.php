<?php
return [
    'id'=>'Events Manager',
    'basePath'=> realpath(__DIR__ . '/../'),
    'bootstrap' =>[
        'debug'
    ],
    'components'=> [
        'urlManager' => [
            'enablePrettyUrl'=> true,
            'showScriptName' => false
        ],
        'request'=> [
            'cookieValidationKey'=>'DFSDGFSDG'
        ],
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],

    'modules' => [
        'debug' => 'yii\debug\Module',
    ]

];