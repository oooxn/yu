<?php
/**
 * URL处理类
 * @date 2016-12-8
 */
final class Route{
	public $url_query;
	public $url_type;
	public $route_url = array();

	public function __construct() {
		$this->url_query = parse_url($_SERVER['REQUEST_URI']);
	}

	/**
	 * 设置URL类型
	 * @access public
	 */
	public function setUrlType($url_type = 2) {
		if ($url_type > 0 && $url_type < 3) {
			$this->url_type = $url_type;
		} else {
			trigger_error("指定的URL模式不存在！");
		}
	}

	/**
	 * 获取数组形式的URL
	 * @access public
	 */
	public function getUrlArray() {
		$this->makeUrl();
		return $this->route_url;
	}
}