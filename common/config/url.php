<?php
return[
        'urlManagerFrontend' => [
            'class' => 'yii\web\UrlManager',
            'baseUrl' => '',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'urlManagerBackend' => [
            'class' => 'yii\web\UrlManager',
            'baseUrl' => '/admin',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'urlManagerApi' => [
            'class' => 'yii\web\UrlManager',
            'baseUrl' => '/api',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ]
];