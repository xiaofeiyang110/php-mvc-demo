<?php
namespace core;

class imooc
{
	static public function run()
	{
		$route = new \core\lib\route();
		$ctrl = $route->ctrl;
		$action = $route->action."Action";
		$ctrlFile = APP.'/controller/'.ucfirst($ctrl).'Controller.php';
		if(is_file($ctrlFile)){
			include $ctrlFile;
			$ctrlClass = CONTROLLER.ucfirst($ctrl).'Controller';
			$ctrlClass = new $ctrlClass();
			$ctrlClass->$action();
		} 

	}
	static public function load($class)
	{

		$class = str_replace('\\', '/', $class);
		$file = IMOOC.'/'.$class.'.php';
		if(is_file($file)){
			include $file;
		}else{
			return false;
		}
	}
}