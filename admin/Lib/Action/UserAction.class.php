<?php 

	/**
	* 
	*/
class UserAction extends PublicAction{
	public function index(){
		if (!empty($_SESSION['admin'])) {
			import('ORG.Util.Page');// 导入分页类
			$count      = $this->model->count();// 查询满足要求的总记录数
			$Page       = new Pages($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出

			$user_list = $this->model->table('think_user as a')->join('think_user_info as b on a.id = b.uid')->field('a.username,a.email,b.*')->limit($Page->firstRow.','.$Page->listRows)->select();
			//print_r($user_list);die;
			$this->assign('page',$show);// 赋值分页输出
			$this->assign('user_list',$user_list);
			$this->views();
		}
		else{
			$this->error('请先登录后台');
			
		}
	}

	

}


 ?>