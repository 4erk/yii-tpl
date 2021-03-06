<?php

use yii\db\Connection;

return [
    'components' => [
        'db'     => [
            'class'    => Connection::class,
            'dsn'      => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '',
            'charset'  => 'utf8',
        ],
        'mailer' => [
            'class'    => 'yii\swifting\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
