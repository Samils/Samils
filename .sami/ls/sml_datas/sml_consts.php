<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Samils\Datas\Consts
 * - Autoload, application dependencies
 */
namespace Samils\Datas\Consts {
  use Configure;

  function def ( $const, $value = null ) {
    $areStrings = function ($values) {

      if (!(is_array ($values) && $values)) {
        return false;
      }

      for ($i = 1; $i < count ($values); $i++) {
        if (!is_string ($values [ $i ])) {
          return false;
        }
      }

      return true;
    };

    if ($areStrings (func_get_args ())) {
      $value = join (DIRECTORY_SEPARATOR,
        array_slice (func_get_args(), 1, func_num_args ())
      );
    }

    defined ($const) or define ($const, $value);
  }
  # '.ls' folder absolute path
  def ('ls', dirname (__DIR__));
  def ('approot', dirname(dirname(ls)));

  def ('DS', DIRECTORY_SEPARATOR );
  def ('VENDOR_DIR', approot, '/vendor/php_modules/');

  # Include Samils Live Configuration File
  # Used by ils to lively configure the
  # current application based on informations
  # inside the '.config.php' module in the root
  # folder of the ils application
  # it contains data about the root folder
  # and sub folders, the application name
  # and each feature being used by the
  # application dependencies bootstrapper
  # [autoload]
  def ('__root__', Configure::ApplicationRoot);
  def ('__ils__', __root__, '.sami', 'ls');
  def ('__bin__', __root__, '.sami', 'ls', '.bin');
  def ('__appdir', __root__, 'app');

  def ('__files__', __root__, 'files');
  def ('__log__', __root__, 'log');
  def ('__public__', __root__, 'public');
  def ('__db__', __root__, 'db');
  def ('__migrations__', __root__, 'db', 'migrations');
  def ('__controllers__', __root__, 'app', 'controllers');
  def ('__helpers__', __root__, 'app', 'helpers');
  def ('__models__', __root__, 'app', 'models');
  def ('__modules__', __root__, 'app', 'modules');
  def ('__views__', __root__, 'app', 'views');
  def ('__vendor__', __root__, 'vendor');
  def ('__config__', __root__, 'config');

  def ('__classes__', __ils__, 'sml_classes');
  def ('__data__', __ils__, 'sml_datas');
  def ('__datas__', __data__);
  def ('__functions__', __ils__, 'sml_functions');
  def ('__system__', __ils__, 'sml_system');
  def ('__setups__', __ils__, 'sml_setup');

  def ('__app__', constant ('Configure::ApplicationModule'));
  def ('ILS_CLI', false );
}
