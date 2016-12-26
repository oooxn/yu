<?php
/**
 * 测试控制器
 *
 */

class testController extends baseController{

 	public function index() {
 		echo '测试Mysql的单例模式效率';
 		echo "</BR>";
 		echo '1:测试查询'."</BR>";
 		$startTime = microtime(true);
 		for ($i=0; $i < 10000; $i++) { 
 			$data = M('user')->where(array('id'=>1))->find();
 		}
 		echo $i.'次耗时：'.(microtime(true)-$startTime);

 		die;
 	}
 }
