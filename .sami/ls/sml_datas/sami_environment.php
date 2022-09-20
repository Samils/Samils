<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Sami
 * - Autoload, application dependencies
 */
namespace Sami\Environment {
  use Configure;

	const ENV_FILE_DIR = __config__.'/environments/';
	const Settings = ENV_FILE_DIR.Configure::Environment.'.php';
}
