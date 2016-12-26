<?php
/**
 * 首页控制器
 * @date 2016-12-12
 */
class homeController extends baseController {
	/**
	 * 首页
	 */
	public function index() {

		if (!empty($_POST)) {
			$account  = $_POST['account'];
			$password = $_POST['password'];

			$data = M('user')->where(array('id'=>1))->find();

			if ($data['name'] == trim($account) && $data['password'] == $password) {
				L($data['id']);
				echo '登录成功';die;
			}
		}
		
		$this->showTemplate('home2');
	}
}