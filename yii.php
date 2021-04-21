<?php
require __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/config/console.php';

// создание и конфигурация приложения, а также вызов метода для обработки входящего запроса
(new yii\console\Application($config))->run();