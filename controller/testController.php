<?php
/**
 * 测试控制器
 *
 */
 class testController extends Controller {
 	public function __construct() {
 		parent::__construct();
 	}
 	public function index() {
 		$data['test'] = getTest();
 		$this->showTemplate('test',$data);
 	}
 }
