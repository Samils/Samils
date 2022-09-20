<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Samils\Application\Cli
 * - Autoload, application dependencies
 */
namespace Samils\Application\Cli {
	function Args ($server_datas) {

		if (!is_array($server_datas)) {
			exit('Error, can not process arguments...');
    }

		$argv = isset($server_datas['argv']) ? (
      $server_datas['argv']
    ) : [];

		$args = [];

		for ($i = 1; $i < count($argv); $i++) {
			array_push($args, $argv[$i]);
    }

		return $args;
	}
}
