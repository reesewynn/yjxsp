<?php
namespace Common\Controller;
use Common\Controller\BaseController;
/**
 * admin 基类控制器
 */
class AdminBaseController extends BaseController{
	/**
	 * 初始化方法
	 */
	public function _initialize(){
		parent::_initialize();
		if(empty(session('user'))){
			if (IS_AJAX) {
				$result["message"]='您需要重新登录！';
				$result["status"]=401;
				$result["total"]=0;
				$result["rows"] = array();
				$this->ajaxReturn($result,'JSON');
			}else{
				$this->redirect('/Admin/Login/index');
			}
		}else {
			$auth=new \Think\Auth();
			$rule_name=MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
			$result=$auth->check($rule_name,$_SESSION['user']['id']);
			//print_r($rule_name);die;
			if(!$result){
				if (IS_APP || IS_AJAX) {
					$result["message"]='您没有权限访问！';
					$result["status"]=403;
					$result["total"]=0;
					$result["rows"] = array();
					$this->ajaxReturn($result,'JSON');
				}else{
					$this->error('您没有权限访问',U('Admin/Login/index'));
				}
			}
		}
	}




}

