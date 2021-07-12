<?php
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
define("HM_BASEPATH", dirname(__DIR__)."/");
chdir(dirname(__DIR__)."/public");
!defined("APP_PATH") && define("APP_PATH","application");
if(is_file( HM_BASEPATH."/vendor/autoload.php")){
    include HM_BASEPATH."/vendor/autoload.php";
}
include HM_BASEPATH."hm/lib/Loader.php";
include HM_BASEPATH."hm/help.php";
(new hm\lib\loader())->autoload();



$system_config=include HM_BASEPATH."/hm/config.php";
$user_config=is_file(HM_BASEPATH."/config/config.php")?include HM_BASEPATH."/config/config.php":array();
$config = array_merge($system_config,$user_config);
define("HM_CONFIG",$config);

if($config['PRODUCTION_MODE']){
    ini_set("display_errors", "Off");
    error_reporting(0);
    define("DEBUG",false);
}else{
    ini_set("display_errors", "On");
    error_reporting(E_ALL | E_STRICT);
    define("DEBUG",true);
}
$go=new \hm\lib\Exception();
$hm=new \hm\HM();