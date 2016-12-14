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
		$data = M('user')->where(array('id'=>1))->find();
		$this->showTemplate('home');
	}
}