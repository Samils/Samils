<?php

namespace Sami\Helper {
	/**
	 * TaskHelper
	 */
	class TaskHelper extends ApplicationHelper {
		public $model = 'Task';
		public $controller = 'Task';

		function done_tasks () {
			$done_tasks = self::where (['done' => true]);
			$this->done_tasks = $done_tasks;
			return $done_tasks;
		}
	}
}