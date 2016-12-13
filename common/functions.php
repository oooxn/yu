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
	return new $model;
}