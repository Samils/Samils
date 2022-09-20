<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Samils\Application\Constructor
 * - Autoload, application dependencies
 */
namespace Samils\Application\Constructor {
	requires ('sami/base/factory');

  use function Samils\dir_boot;

  $path = requires ('path');
  $factoryDir = $path->resolve ('@root', 'db', 'factory');

  dir_boot ($factoryDir);
}
