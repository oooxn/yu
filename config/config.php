<?php 
/**
 * 系统配置文件
 *
 */
$CONFIG = array(
	'system' => array(
		//数据库
		'db' => array(
			'db_host' => 'localhost',
			'db_user' => 'root',
			'db_password' => '',
			'db_database' => 'test',
			'db_table_prefix' => 'app_',
			'db_charset' => 'utf8',
			'db_conn' => '',
		),
		'route' => array(
			'default_controller' => 'home', //默认控制器
			'default_action' => 'index', //系统默认控制器
			'url_type' => 1,
		),
		'cache' => array(
			'cache_dir' => 'cache', //
			'cache_prefix' => 'cache_',
			'cache_time' => 1800,
			'cache_mode' => 2,
		),
	),
);
