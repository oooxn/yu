<?php 
/**
 * 核心控制器
 * @date 2016-12-9
 */
class Controller {

	protected $template = null;
	public function __construct() {
		// header('Content-type:text/html;chartset=utf-8');
	}
	/**
	 * 实例化模型
	 * @access final protected
	 * @param  string $model  模型名称
	 */
	final protected function model($model) {
		if (empty($model)) {
			trigger_error('不能实例化空模型');
		}
		$model_name = $model . 'Model';
		return new $model_name;
	}
	/**
	 * 加载类库
	 * @param  string $lib 类库名称
	 * @param  bool $my 如果FALSE默认加载系统自动加载的类库，为TRUE则加载非自动加载类库
	 * @return object
	 */
	final protected function load($lib, $auto = TRUE) {
		if (empty($lib)) {
			trigger_error('加载类库名不能为空');
		} elseif ($auto === TRUE) {
			return Application::$_lib[$lib];
		} elseif ($auto === FALSE) {
			return Application::newLib($lib);
		}
	}
	/**
	 * 加载系统配置，默认为系统配置 $CONFIG['system'][$config]
	 * @access final protected
	 * @param  string $config 配置名
	 */
	final protected function config($config) {
		return Application::$_config[$config];
	}
	/**
	 * 加载模板文件
	 * @access final protected
	 * @param  string $path  模板路径
	 * @return string 模板字符串
	 */
	final protected function showTemplate($path) {
		if (is_null($this->template)) {
			$this->template = $this->load('template');
		}
		$this->template->init($path);
		$this->template->outPut();
	}
	/**
	 * 给模板赋值
	 * @access final protected
	 * @param  string $name  模板字符名
	 * @param  array  $data  赋值数组
	 */
	final protected function assign($name, $data) {
		if (is_null($this->template)) {
			$this->template = $this->load('template');
		}
		$this->template->assign($name, $data);
	}

}