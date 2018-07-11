<?php
// 本类由系统自动生成，仅供测试用途
class AdminAction extends PublicAction {
	//管理员登录
    public function login(){
    	if (!empty($_POST['username'])) {
    		$username = $_POST['username'];
    		$password = md5($_POST['password']);
    		//print_r($_POST);die;
    		
    		$admin = $this->model->where(array('username'=>$username,'password'=>$password))->field('username')->find();
    		//print_r($admin);die;
    		if (!empty($admin)) {
    			$_SESSION['admin'] = $admin;
    			//print_r($_SESSION);die;
    			$this->redirect('area/index');
    		}
    		else{
    			$this->error('用户名或密码错误！');
    		}
    	}
    	

    	$this->display();
    }
   public function index(){
    $this->redirect('login');
   }

    //退出
    public function logout(){
    	unset($_SESSION['admin']);
    	$this->redirect('login');
    }

    //添加管理员
    public function register(){
    	if (!empty($_POST['username'])) {

    		$username = $_POST['username'];

    		
    		$admin_find = $this->model->where("username = '$username'")->find();
    		//print_r($admin);die;
    		if ($admin_find['username'] == $username) {
    			$this->error('该用户已存在');
    		}
    		
    		$password = md5($_POST['password']);
    		if (empty($_POST['password'])) {
    			$this->error('密码不能为空');
    		}
    		$re_password = md5($_POST['re_password']);
    		if ($password != $re_password ) {
    			$this->error('两次输入密码不一致');
    		}

    		//print_r($_POST);die;
    		

			$admin_add = $this->model->add($_POST);
    		//print_r($admin_add);die;
    		if ($admin_add > 0) {
    			//$_SESSION['admin'] = $admin_add;
    			$id = mysql_insert_id();
	    		$row = $this->model->where("id = $id")->find();
	    		$_SESSION['admin'] = $row;
    			//print_r($_SESSION);die;
    			$this->redirect('index');
    		}
    		else{
    			$this->error('用户名或密码错误！');
    		}
			//$this->error('密码不能为空');
    	
    		
    	}
    	$this->views();
    }



}