<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'name' => 'GSM-GPS',
	'language' =>  'ru-RU',
	'defaultRoute' => 'category/index',
	'modules' => [
       'inside' => [
            'class' => 'app\modules\inside\Module',
            'layout' => 'main',
        ],

		'yii2images' => [
            'class' => 'rico\yii2images\Module',
            //be sure, that permissions ok
            //if you cant avoid permission errors you have to create "images" folder in web root manually and set 777 permissions
            'imagesStorePath' => 'upload/store', //path to origin images
            'imagesCachePath' => 'upload/cache', //path to resized copies
            'graphicsLibrary' => 'GD', //but really its better to use 'Imagick'
            'placeHolderPath' => '@webroot/upload/store/no-image.png', // if you want to get placeholder when image not exists, string will be processed by Yii::getAlias
        ],
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Kc1q4NRrG34ob0-8bxqZNxT5oSNZjHcn',
			'baseUrl' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
			//'loginUrl' => 'cart/view'
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
      'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
           'suffix' => '.html',
            'rules' => [
            'product/<alias:[\w_\/-]+>'=>'product/view',
            'usefulinfo/<alias:[\w_\/-]+>'=>'usefulinfo/view',
            [
                    'pattern' => 'cart/add',
                    'route' => 'cart/add',
                    'suffix' => ''
                ],
               
            [
                    'pattern' => 'cart/clear',
                    'route' => 'cart/clear',
                    'suffix' => ''
                ],
            [
                    'pattern' => 'cart/del-item',
                    'route' => 'cart/del-item',
                    'suffix' => ''
                ],
            [
                    'pattern' => 'cart/view',
                    'route' => 'cart/view',
                    'suffix' => ''
                ],
            
				'<action:about|kontrprobeg|kontrspeed|kontrpozith|blockmotor|opissiskontr|gpsmayak|registration|contact|tarif|gsmrozetka|opissismonit|gsmnabltransp|vorota|kontroltopliva|gpstrekery|collaboration|usefulinformation|montransporta|delivery|login|logout>' => 'site/<action>',
				'category/<id:\d+>/page/<page:\d+>' => 'category/view',
                'category/<id:\d+>' => 'category/view',
                'search' => 'category/search',
            ],
        ],
    ],
   'controllerMap' => [
        'elfinder' => [
            'class' => 'mihaildev\elfinder\PathController',
            'access' => ['@'],
            'root' => [
                'baseUrl'=>'/web',
//                'basePath'=>'@webroot',
                'path' => 'upload/global',
                'name' => 'Global'
            ],
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
