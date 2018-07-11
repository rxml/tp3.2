<?php
// 本类由系统自动生成，仅供测试用途
class PublicAction extends Action {
	protected $model;
/*  public function __construct(){
    	parent::__construct();
    	$classname = substr(get_class($this),0,-6);
    	//echo $classname;die;
    	$this->model = D($classname);
   }*/
   public function _initialize(){
   		$classname = substr(get_class($this),0,-6);
   		$this->model = D($classname);
   }
   public function views($views=''){
   	//$this->display('public:header');
   	$this->display($views);
   	//$this->display('public:footer');
   }
}