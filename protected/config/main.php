<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Data Profesional',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
      'application.modules.srbac.controllers.SBaseController'
	),

	'modules'=>array(
		
        // uncomment the following to enable the Gii tool
        'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'master',
        ),
	
       'srbac'=>array(
           'userclass'=>'User',
           'userid'=>'UserID',
           'username'=>'NamaUser',
           'debug'=>true,
           'pageSize'=>10,
           'superUser'=>'Authority',
           'css'=>'srbac.css',
           'layout'=>'application.views.layouts.main',
           'notAuthorizedView'=>'srbac.views.authitem.unauthorized',
           'alwaysAllowed'=>array(),
           'userActions'=>array('show','View','List'),
           'listBoxNumberOfLines'=>15,
           'imagesPath'=>'srbac.images',
           'imagesPack'=>'noia',
           'iconText'=>false,
           'header'=>'srbac.views.authitem.header',
           'footer'=>'srbac.views.authitem.footer',
           'showHeader'=>true,
           'showFooter'=>true,
           'alwaysAllowedPath'=>'srbac.components',
       ),
		
	),

	// application components
	'components'=>array(
    'authManager'=>array(
        'class'=>'CDbAuthManager',
        'connectionID'=>'db',
        'itemTable'=>'items',
        'assignmentTable'=>'assignments',
        'itemChildTable'=>'itemchildren',
    ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		/*
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		*/
		/*
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database
		*/
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=dbmydata',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
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
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);