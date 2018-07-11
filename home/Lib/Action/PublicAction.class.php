<?php
// 本类由系统自动生成，仅供测试用途
class PublicAction extends Action {
	protected $model;
	protected $cookie;
	public function _initialize(){

        $classname = substr(get_class($this),0,-6);//获取url上面的类名
        $this->model = D($classname);

    }

    public function views($views = ''){
    	
  		//$this->display('Public:header');
  		$this->display($views);
  		//$this->display('Public:footer');
    }
}