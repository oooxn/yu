<?php  
/**
 * 入口文件
 *
 */
require dirname(__FILE__).'/system/app.php';
require dirname(__FILE__).'/config/config.php';
require dirname(__FILE__).'/common/functions.php';
Application::run($CONFIG);