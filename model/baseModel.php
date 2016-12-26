<?php
/**
 * Model基类
 * @date 2016-12-13
 */
class baseModel extends Model {
	protected $condition;

	/**
	 * Where
	 * @param array $condition['id'] = 1;
	 */
	public function where($condition = array()) {
		if (empty($condition)) {
			return $this;
		} else {
			$stringC = '';
			foreach ($condition as $key => $value) {
				if (!is_array($value)) {
					$stringC .= !empty($stringC) ? ' AND '.$key.'='.$value : $key.'='.$value;
				}
			}
			$this->condition = $stringC;
			return $this;
		}
	}

	/**
	 * find
	 * @param  string $field 查询字段
	 * @param  bool   $is_select 是否为多条查询
	 * @return array
	 */
	public function find($field = '', $is_select = false) {
		$sql = '';
		if (!empty($this->condition)) {
			$sql = 'select * from db_table_name_re where '. $this->condition;
		} else {
			$sql = 'select * from db_table_name_re';
		}

		$data = $this->query($sql);
		return current($data);
	}

	/**
	 * select
	 * 
	 */
}