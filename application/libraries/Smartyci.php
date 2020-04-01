<?php
if (!defined('BASEPATH')) {exit('No direct script access allowed');}
require_once(APPPATH . "third_party/smarty/libs/Smarty.class.php" );
class Smartyci extends Smarty {
    public function __construct() {
        parent::__construct();
        $this->caching = false;
        $this->force_compile = true;   
        $this->setTemplateDir(APPPATH . 'views');
        $this->setCompileDir(APPPATH . 'third_party/smarty/templates_c');
        $this->setConfigDir(APPPATH . 'third_party/smarty/configs');
        $this->setCacheDir(APPPATH . 'cache'); 
    }
}
