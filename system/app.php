<?php
/**
 * 应用驱动类
 *
 */
define('SYSTEM_PATH', dirname(__FILE__));
define('ROOT_PATH', substr(SYSTEM_PATH, 0,-7));
define('SYS_LIB_PATH', SYSTEM_PATH.'/lib');
define('APP_LIB_PATH', ROOT_PATH.'/lib');
define('SYS_CORE_PATH', SYSTEM_PATH.'/core');
define('CONTROLLER_PATH', ROOT_PATH.'/controller');
define('MODEL_PATH', ROOT_PATH.'/model');
define('VIEW_PATH', ROOT_PATH.'/view');
define('LOG_PATH'.ROOT_PATH.'/error/');
final class Application {
	public static $_lib = null;
	public static $_config = null;
	public static function init() {
		self::setAutoLibs();
		require SYS_CORE_PATH.'/model.php';
		require SYS_CORE_PATH.'/controller.php';
	}

	/**
	 * 创建应用
	 * @access public
	 * @param  array  $config
	 */
	public static function run($config) {
		self::$_config = $config['system'];
		self::init();
		self::autoload();
		self::$_lib['route']->setUrlType(self::$_config['route']['url_type']);
		$url_array = self::$_lib['route']->getUrlArray();
		self::routeToCm($url_array);
	}
	/**
	 * 自动加载类库
	 * @access public
	 * @param  array   $_lib
	 */
	public static function autoload() {
		foreach (self::$_lib as $key => $value) {
			require(self::$_lib[$key]);
			$lib = ucfirst($key);
			self::$_lib[$key] = new $lib;
		}
		//初始化cache
		if (is_object(self::$_lib['cache'])) {
			self::$_lib['cache']->init(
				''
			);
		}
	}
	/**
	 * 自动加载的类库
	 * @access public 
	 */
	public static function setAutoLibs() {
		self::$_lib = array(
			'route'     => SYS_LIB_PATH.'/lib_route.php',
			'mysql'     => SYS_LIB_PATH.'/lib_mysql.php',
			'template'  => SYS_LIB_PATH.'/lib_template/php',
			'cache'     => SYS_LIB_PATH.'/lib_cahce.php',
			'thumbnail' => SYS_LIB_PATH.'lib_thumbnail.php'
		);
	}
}