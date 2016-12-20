<?php
define('IMOOC',dirname(__FILE__));
define('CORE',IMOOC.'/core');
define('APP', IMOOC.'/app');
define('CONTROLLER', 'app\\controller\\');

define('DEBUG', true);

if(DEBUG){
	ini_set('display_error', 'On');
}else{
	ini_set('display_error', 'Off');
}

include CORE.'/common/function.php';
include CORE.'/imooc.php';

spl_autoload_register('\core\imooc::load');

\core\imooc::run();

