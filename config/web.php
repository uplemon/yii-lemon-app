<?php

$config = [
    'id' => 'lemon-web',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'app\controllers',
    'defaultRoute' => 'default/index',
    'aliases' => [
        '@app' => dirname(__DIR__),
    ],
];

return $config;