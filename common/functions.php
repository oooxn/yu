<?php
/**
 * 系统的一些函数
 */



/**
 * 检查和设置登录
 * @param string $user_id
 */
function L($user_id = '') {
	$session_key = 'login_user_session';
	if (empty($user_id)) {
		if (empty($_SESSION[$session_key])) {
			return false;
		} else {
			return $_SESSION[$session_key];
		}
	} else {
		$_SESSION[$session_key] = $user_id;
		return true;
	}
}

/**
 * 实例化模型
 * @param string  $modelName
 */
function M($modelName) {
	$model = $modelName.'Model';
	return new $model($modelName);
}

/**
 * 获取配置值 | 多重用'.'链接
 * @param string $configName 例：db.db_host
 */
function C($configName) {
	$configNameArr = explode('.', $configName);
	$configAll = Application::$_config;
	foreach ($configNameArr as $key => $value) {
		$configAll = $configAll[$value];
	}

	if (!empty($configAll)) {
		return $configAll;
	} else {
		return '';
	}

}