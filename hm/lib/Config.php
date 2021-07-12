<?php
namespace hm\lib;
class Config{
    protected $config = [];
    public function getConfig(){
        $system_config=include HM_BASEPATH."/hm/config.php";
        $user_config=is_file(HM_BASEPATH."/config/config.php")?include HM_BASEPATH."/config/config.php":array();
        $this->config = array_merge($system_config,$user_config);
        return $this->config;
    }
}