<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],

    'aliases' => [
            '@apaoww/oci8' => '@vendor/apaoww/yii2-oci8',

    ]
];
