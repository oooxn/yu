<?php
/**
 * 系统的一些函数
 */



function getTest() {
	return 'niuwenyu';
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