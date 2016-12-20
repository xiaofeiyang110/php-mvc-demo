<?php 
namespace app\controller;

class IndexController extends \core\imooc
{
	public function indexAction()
	{
		// $model  =  new  \core\lib\Model();
		// $sql = "select * from test";
		// $result = $model->query($sql);

		$this->assign('title','这是一个试图文件');
		$this->assign('data','hello word');
		$this->display('index.html');
	}
}