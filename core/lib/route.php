<?php 
namespace core\lib;
class route 
{
    public $ctrl ;
    public $action;
    public function __construct()
    {
        if(!empty($_SERVER['REQUEST_URI']) && $_SERVER['REQUEST_URI'] != '/'){
            $URI = $_SERVER['REQUEST_URI'];
            $paths = explode('/', trim($URI,'/'));
            // var_dump($paths);
            $this->ctrl = $paths[0] ? $paths[0] : 'index' ;
            $this->action = $paths[1] ? $paths[1] : 'index';
            if(isset($paths[0])) unset($paths[0]);
            if(isset($paths[1])) unset($paths[1]);
            $count = count($paths);
            $paths = array_merge($paths);
            for ($i=0; $i < $count; $i=$i+2) { 
                if(isset($paths[$i+1])){
                    $_GET[$paths[$i]] = $paths[$i+1];
                }
            }
        }else{
            $this->ctrl = 'index';
            $this->action = 'index';
        }
    }
}