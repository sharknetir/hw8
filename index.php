<?php

//==================error ================
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//==================end error=============

//========================defines=========
define("db_username","root");
define("db_password","");
define("db_Databasename","hw8");
define("db_Servername",$_SERVER["SERVER_NAME"]);
//======================end defines========
//TODO link to external file
define('URL',$_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]);
define('URL_JS','/hw8/libs/public/js');
define('URL_CSS',"/hw8/libs/public/css");
define('URL_vendor',"/hw8/libs/public/vendor");
define('URL_img',"/hw8/libs/public/img");
define('URL_scss',"/hw8/libs/public/scss");




//require_once "libs/sess.php";
require_once "libs/Session.php";
require_once "libs/Controller.php";
require_once "libs/View.php";
require_once "libs/Model.php";
require "libs/bootstrap.php";