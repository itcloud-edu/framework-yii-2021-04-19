<?php
return [
    'id'=>'Events Manager',
    'basePath'=> realpath(__DIR__ . '/../'),
    'bootstrap' => [
        'debug'
    ],
    'components'=> [
        'urlManager' => [
            'enablePrettyUrl'=> true,
            'showScriptName' => false
        ],
        'request' => [
            'cookieValidationKey' => '123'
        ],
        'db' => require(__DIR__ . '/db.php'),
        'user' => [
            'identityClass' => 'app\models\UserIdentity'
        ]
    ],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],

    'modules' => [
        'debug' => "yii\debug\Module"
    ]

];