<?php
$CONFIG['LOG_DIR'] = "../logs/";
$GLOBAL_PATH = "../";
$APP_PATH = "../com/";
$ENGINE_PATH = "../engines/";
$WEBROOT = "../html/";

//DEFINE VARIABLE
define('APPLICATION','closeup');	//set aplikasi yang digunakan
define('DB_PREFIX','closeupdb');	//set DB prefix for frontend
define('BASEURL','http://kanacode.loc');	//set BASEURL frontend
define('BASEURL_ADMIN','http://admin.kanacode.loc');	//set BASEURL admin


//set database
$CONFIG['DEVELOPMENT'] = true;
if($CONFIG['DEVELOPMENT']){
	$CONFIG['DATABASE'][0]['HOST'] 		= "localhost";
	$CONFIG['DATABASE'][0]['USERNAME'] 	= "sample";
	$CONFIG['DATABASE'][0]['PASSWORD'] 	= "sample";
	$CONFIG['DATABASE'][0]['DATABASE'] 	= "closeup";
	error_reporting(0);
}else{
	$CONFIG['DATABASE'][0]['HOST'] 				= "";
	$CONFIG['DATABASE'][0]['USERNAME'] 	= "";
	$CONFIG['DATABASE'][0]['PASSWORD'] 	= "";
	$CONFIG['DATABASE'][0]['DATABASE'] 	= "";
}

/* DATETIME SET */
$timeZone = 'Asia/Jakarta';
date_default_timezone_set($timeZone);

/* SET MOP */
$CONFIG['MOP'] = true;