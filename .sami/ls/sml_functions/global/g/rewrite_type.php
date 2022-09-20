<?php

namespace g {
	function rewrite_type ($type) {
		$types_rewites = array (
			'string' => 'varchar',
			'str' => 'varchar',
			'bool' => 'boolean',
			'integer' => 'int'
		);

		$type = \lower ($type);

		if (isset($types_rewites[$type])) {
			$type = $types_rewites [
				$type
			];
		}

		return (
			$type
		);
	}
}