<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$backend=dirname(dirname(__FILE__));
$frontend=dirname($backend);
Yii::setPathOfAlias('backend', $backend);

return array(
	'basePath' => $frontend,
	'name'=>'Admin Backend',
	'timeZone' => 'Asia/Shanghai',

	'controllerPath' => $backend.'/controllers',
	'viewPath' => $backend.'/views',
	'runtimePath' => $backend.'/runtime',

	'import' => array(
		'backend.models.*',
		'backend.components.*',
		'application.models.*',
		'application.components.*',
		'application.extensions.*',
                'application.modules.user.models.*',
                'application.modules.user.components.*',
	),

	// preloading 'log' component
	'preload'=>array('log'),

	'modules'=>array(
		'user',
	),
	// application components
	'components'=>array(
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

                'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=tfcms',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
			'tablePrefix' => 'tf_',
		),
                'errorHandler'=>array(
			// use 'site/error' action to display errors
                        'errorAction'=>'site/error',
                ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
                 'user'=>array(
                        // enable cookie-based authentication
                   'allowAutoLogin'=>true,
                   'loginUrl' => array('/user/login'),
                ),
                'file'=>array(
                    'class'=>'application.extensions.file.CFile',
                ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
