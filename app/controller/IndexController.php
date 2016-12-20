<?php 
namespace app\controller;

class IndexController
{
	public function indexAction()
	{
		$model  =  new  \core\lib\Model();
		$sql = "select * from test";
		$result = $model->query($sql);
	}
}