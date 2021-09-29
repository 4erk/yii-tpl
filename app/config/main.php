<?php

use main\models\User;
use yii\log\FileTarget;

$params = array_merge(
    require __DIR__ . '/../../main/config/params.php',
    require __DIR__ . '/../../main/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id'                  => 'app',
    'basePath'            => dirname(__DIR__),
    'bootstrap'           => ['log'],
    'controllerNamespace' => 'app\controllers',
    'components'          => [
        'request'      => [
            'csrfParam' => '_csrf',
        ],
        'user'         => [
            'identityClass'   => User::class,
            'enableAutoLogin' => true,
            'identityCookie'  => ['name' => '_identity', 'httpOnly' => true],
        ],
        'session'      => [
            // this is the name of the session cookie used for login on the app
            'name' => 'session',
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => FileTarget::class,
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager'   => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'rules'           => [
                '<controller:[\w\-_]+>/<action:[\w\-_]+>' => '<controller>/<action>',
                '<action:(index|contacts|login|about)>'   => 'site/<action>',
                '<controller:[\w\-_]+>'                   => '<controller>/index',
            ],
        ],

    ],
    'params'              => $params,
];
