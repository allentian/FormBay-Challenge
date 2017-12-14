<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
	        'dsn' => 'mysql:host=mysql.dev;dbname=formbay',
	        'username' => 'formbay',
	        'password' => 'formbaypassword',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
        ],
    ],
];
