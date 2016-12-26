<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'language' => 'vi',
    'bootstrap' => ['languagepicker'],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'languagepicker' => [
            'class' => 'lajax\languagepicker\Component',
            'languages' => ['en-US', 'de-DE', 'vi-VN', ],         // List of available languages (icons only)
            'cookieName' => 'language',                         // Name of the cookie.
            'expireDays' => 64,                                 // The expiration time of the cookie is 64 days.
            'callback' => function() {
                if (!\Yii::$app->user->isGuest) {
                    $user = \Yii::$app->user->identity;
                    $user->language = \Yii::$app->language;
                    $user->save();
                }
            }
        ],
        'i18n' => [
            'translations' => [
                'app*' => [
                        'class' => 'yii\i18n\PhpMessageSource',
                        'basePath' => '@approot/messages',
                    ]
                ]
        ],
        'urlManagerBackend' => [
            'class' => 'yii\web\UrlManager',
            'baseUrl' => '/login/backend/web',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
    'modules' => [
        'redactor' => 'yii\redactor\RedactorModule',
        'translatemanager' => [
            'class' => 'lajax\translatemanager\Module',
        ],
    ],
];