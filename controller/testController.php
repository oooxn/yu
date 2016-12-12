<?php
/**
 * 测试控制器
 *
 */

class testController extends baseController{

 	public function index() {
 		$data['test'] = getTest();
 		$data2['aaa'] = 111111111;

 		$this->assign('aaa',$data2);
 		$this->assign('niu',$data);
 		$this->showTemplate('test');
 	}
 }
