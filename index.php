<?php

// YOU MIGHT NEED TO CHANGE THE LOCATION OF YOUR YII.PHP IF IT IS LOCATED ELSEWHERE

if(file_exists(dirname(__FILE__).'/protected/config/secrets.php')){

//Loading senstive variables

$secrets=dirname(__FILE__).'/protected/config/secrets.php';	
require_once($secrets);

//Standard YII config

$yii=dirname(__FILE__).$yiilocation;
$config=dirname(__FILE__).'/protected/config/main.php';
$globals=dirname(__FILE__).'/protected/config/globals.php';

if ($debugmode) {

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);
}

require_once($globals);
require_once($yii);
Yii::createWebApplication($config)->run();
} else {

echo "To get the site up and running you will need to change /protected/config/secrets.example.php to /protected/config/secrets.php and reflect your local environment.";
}


