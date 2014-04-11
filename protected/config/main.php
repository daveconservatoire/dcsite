<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

//Loading senstive variables

$secrets='secrets.php';	
include($secrets);


// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Dave Conservatoire',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'ext.eoauth.*',
        'ext.eoauth.lib.*',
        'ext.lightopenid.*',
        'ext.eauth.services.*',
        'ext.eauth.custom_services.*',

	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
	
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>$giipass,
		 	// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		
		//Set you BaseUrl here otherwise it will default to the install directory of the index.php
		/*
		'request' => array(
            'baseUrl' => 'http://www.example.com',
        ),
        */
		    'loid' => array(
        'class' => 'ext.lightopenid.loid',
    ),
      'eauth' => array(
        'class' => 'ext.eauth.EAuth',
        'popup' => true, // Use the popup window instead of redirecting.
        'services' => array( // You can change the providers and their classes.
             'google' => array(
                    // register your app here: https://code.google.com/apis/console/
                    'class' => 'GoogleOAuthService',
                    'client_id' => $googleclientid,
                    'client_secret' => $googlesecret,
                    'title' => 'Google',
                ),



            'facebook' => array(
                'class' => 'FacebookOAuthService',
                'client_id' => $facebookclientid,
                'client_secret' => $facebooksecret,
            ),


        ),
    ),

    

		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
			    'index'=>'site/index',
			    'donate'=>'site/donate',
			    'contact'=>'site/contact',
			    'about'=>'site/about',
			    'login'=>'site/login',
			    'topic/<urltitle>'=>'topic/view',
			    'course/<urltitle>'=>'course/view',
			    'lesson/<urltitle>'=> 'lesson/view',
			    '*'=>'site/index',
			    array('api/create', 'pattern'=>'api/<model:\w+>', 'verb'=>'POST'),
				
			),
			'showScriptName'=>false,
		),
		/*
	
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		*/
			
		// uncomment the following to use a MySQL database
		
		//Add you own DB info!
	
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname='.$dbname,
			'emulatePrepare' => true,
			'username' => $dbusername,
			'password' => $dbpassword,
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
		'adminEmail'=>'dave@daveconservatoire.org',
	),
);