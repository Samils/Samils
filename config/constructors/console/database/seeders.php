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
  use function Samils\dir_boot;

  $path = requires ('path');
  $seedersDir = $path->resolve ('~', 'db', 'seeders');

  dir_boot ( $seedersDir );
}
