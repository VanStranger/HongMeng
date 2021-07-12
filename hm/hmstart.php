<?php
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
define("HM_BASEPATH", dirname(__DIR__)."/");
chdir(dirname(__DIR__)."/public");
!defined("APP_PATH") && define("APP_PATH","application");
include HM_BASEPATH."hm/lib/Loader.php";
include HM_BASEPATH."hm/help.php";
(new hm\lib\loader())->autoload();
if(is_file( HM_BASEPATH."/vendor/autoload.php")){
    include HM_BASEPATH."/vendor/autoload.php";
}
$hm=new \hm\HM();
$hm->run();
