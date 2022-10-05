<?php

namespace Application\Environment\Base {
  use Sammy\Packs\Sami\ModuleBootstrapper;
  use ENV;

  use function Samils\Datas\Consts\def;
  use function Samils\dir_boot;
  /**
   * Boot up the controllers directory
   * inside the 'app' base directory.
   * ---
   * This feature provides an instance of
   * some of the ils application components
   * that should be accessible from the rest
   * of the application flux.
   * ---
   * The basis of the current ils application
   * component're being loaded in order getting
   * started with the main module configurations,
   * wich should give the possibility to use the
   * rest of the module insluded inside the current
   * application.
   */
  dir_boot (__controllers__);
  /**
   * @constant ApplicationModuleFilePath
   * An absolute path to the Application
   * Module File Path inside the app/modules
   * directory in the root.
   * ---
   * IT'S LOADED BEFORE, BACAUSE OF THE BASE
   * CONCEPT INSIDE THE ILS APPLICATION;
   * WHOLE THE ILS APPLICATION MODULES ARE
   * AN EXTENSION OF THE 'ApplicationModule'
   * CLASS, CONTAINED IN THE 'ApplicationModule'
   * FILE.
   * ---
   * The first way for loading that file is
   * looking for a way to know if that exists;
   * Then making an inclusion for the file in
   * the application scope in order having a
   * possibility to bootstrap the rest of the
   * modules directory
   */
  const ApplicationModuleFilePath = (
    __modules__
    /**
     * The application module file
     * containg the 'ApplicationModule'
     * class.
     * That provides a base structure for
     * the ils modules (Applications) and
     * makes them usable for the module
     * initializer.
     */
    . '/application_module.php'
  );
  /**
   * Make sure the application module file
   * is where it's to in order avoiding to
   * have bugs when creating a module based
   * on the ApplicationModule class.
   * On condition that whole the modules are
   * based on the application module declared
   * extactly in the application module file,
   * avoid to bootstrap the modules directory
   * if the application module file is not
   * where it has to.
   * -
   * NOTE: THE CURRENT APPLICATION IS A ILS
   * MODULE BASED APPLICATION, WILL NOT RUN
   * CORRECTLY WITHOUT THE APPLICATION MODULE
   * FILE OR EVEN THE APPLICATION MODULE CLASS
   * BEING PREVIOUSLY CREATED OR DECLARED.
   * -
   * IN THIS CASE, IT SHOULD BE NECESSARY TO USE
   * THE FUNCTIONALY WAY TO BOOTSTRAP AND CONFIGURE
   * A ILS MODULE FOR THE APPLICATION ...
   * -
   * EG:
   * - <?php
   * - $Sami = requires ('Sami');
   * - # Creating the Application 'App'
   * - $app = $Sami->module ('App', []);
   * -
   * -
   * INSTEAD OF USING CLASSES BASED ON THE APPLICATION
   * MODULE CLASS.
   */
  if (file_exists (ApplicationModuleFilePath)) {
    /**
     * Having sure the application module
     * file is where's to, load it and bootstrap
     * the app/modules directory.
     */
    include_once (ApplicationModuleFilePath);
  }
  /**
   * Boot up the modules directory
   * inside the 'app' base directory.
   * -
   * This feature provides an instance of
   * some of the ils application components
   * that should be accessible from the rest
   * of the application flux.
   * -
   * The basis of the current ils application
   * component're being loaded in order getting
   * started with the main module configurations,
   * wich should give the possibility to use the
   * rest of the module insluded inside the current
   * application.
   */
  dir_boot (__modules__);
  /**
   * @constant ApplicationHelperFile
   * An absolute path containg a reference
   * for the application helper file, wich
   * containg the ApplicationHelper class;
   * the application helper base.
   * -
   * IT'S LOADED BEFORE, BACAUSE OF THE BASE
   * CONCEPT INSIDE THE ILS APPLICATION;
   * WHOLE THE ILS APPLICATION HELPERS ARE
   * AN EXTENSION OF THE 'ApplicationHelper'
   * CLASS, CONTAINED IN THE 'application_helper'
   * FILE.
   * -
   * The first way for loading that file is
   * looking for a way to know if that exists;
   * Then making an inclusion for the file in
   * the application scope in order having a
   * possibility to bootstrap the rest of the
   * modules directory
   */
  const ApplicationHelperFile = (
    __helpers__
    /**
     * The application helper file
     * containg the 'ApplicationHelper'
     * class located inside the 'Sami\Helper'
     * namespace.
     * That provides a base structure for
     * the ils helpers and
     * makes them usable for the controller
     * and views to be rendered by the current ve
     */
    . '/application_helper.php'
  );

  /**
   * Make sure the application helper file is
   * where it has to, in order avoiding to see
   * bugs when trying to include that to provide
   * access to the ApplicationHelper class for the
   * rest of the application helpers.
   */
  if (file_exists (ApplicationHelperFile)) {
    include_once ApplicationHelperFile;
  }

  dir_boot (__helpers__);

  $ilsEnv = ($env = ENV::Get ('ILS_ENV')) ? $env : 'production';

  /**
   * @const Environment
   * - Current environment configuration
   * - file absolute path
   */
  def ('Environment', ENV_FILE_DIR, join ('.', [strtolower ($ilsEnv), 'php']));

  dir_boot (join (DIRECTORY_SEPARATOR, [
    __config__,
    'constructors',
    in_array (php_sapi_name (), ['cli']) ? 'console' : 'server'
  ]));

  ModuleBootstrapper::Bootstrap ();
  /**
   * @file environment.php
   * Environment file provides informations
   * about the current environment configurations
   */
  include_once (__config__ . '/environment.php');
  include_once (__setups__ . '/setup_base.php');
  include_once (__config__ . '/routes.php');
}
