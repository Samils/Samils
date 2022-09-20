<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @namespace
 * - Autoload, application dependencies
 */
namespace Samils\Datas\Consts {
  use Configure as ApplicationConfig;
  use Samils\Application\Configure;

  def ('conf', array_merge (
    # Absolute path to the application
    # directory in the disk.
    array ('root' => __root__),
    # Base OCnfiguration Map of the
    # application configurations
    # contained inside a constant
    # array.
    ApplicationConfig::BaseMap(),
    Configure::getEnvironmentConf()
  ));
}
