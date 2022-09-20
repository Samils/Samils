<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Samils
 * - Autoload, application dependencies
 */
namespace Samils {
  /**
   * @const AppBootstrappers
   * An list of the application
   * bootstrappers
   */
  const AppBootstrappers = array (
    __functions__ . '/.application-server.php',
    __functions__ . '/.app_dir_boot.php'
  );
  /**
   * @method array dir_boot
   *
   * Ils Directory Bootstrapper
   *
   */
  function dir_boot ($dir = null) {
    if (!(is_string($dir) && !empty($dir)))
      $dir = __ils__;

    # Get the trace file name to
    # use the ref directory as the
    # root in case of ralative paths
    # used in the dir variable
    if (preg_match('/^(\.+\/)/', $dir)) {
      $backTarce = debug_backtrace();
      $trace = isset($backTarce[ 0 ]) ? $backTarce[ 0 ] : null;

      if (is_array($trace) && isset($trace['file'])) {
        $dir = dirname($trace['file']) . DIRECTORY_SEPARATOR . (
          $dir
        );
      }
    }
    /**
     * remove and correspondence for a bar
     * found at the end of '$dir' str in order
     * avoiding to have to directory separators
     * in the string
     */
    $dir = preg_replace('/(\/|\\\)+$/', '', $dir);
    /**
     * Create a pattern to match the files inside the
     * current directory and find each file or firectory
     * inside it in order booting it
     */
    $dir .= '/*';

    /**
     * @var spc_dir
     * - Special Directories
     * - An array containg directory names that're not
     * - included by the 'dir_boot' function and must
     * - to be bootstrapped manually if it's necessary
     */
    $spc_dir = [
      'app',
      'db',
      'views',
      'sml_setup',
      'application-server'
    ];
    /**
     * @var spc_file
     * - Special Files
     * - An array containg file names that're not
     * - included by the 'dir_boot' function and must
     * - to be included manually if it's necessary
     */
    $spc_file = [ '.base.php' ];
    $php_extensions = [ 'php' ];

    /**
     * List each file in the directory inside the
     * '$path_files' variable and then, run around
     * it and including each php file or booting
     * each sub directory inside it in order completing
     * the boot process
     */
    $path_files = glob( $dir );

    if (!!(is_array($path_files) && $path_files)) {
      foreach ($path_files as $i => $file) {
        $f = pathinfo($file, PATHINFO_FILENAME);

        if (is_dir($file) && !in_array($f, $spc_dir)) {
          dir_boot ($file);
        }elseif(is_file($file) && !in_array($f, $spc_file)){
          $e = strtolower(pathinfo($file, PATHINFO_EXTENSION));
          if (in_array($e, $php_extensions)){
            include_once $file;
          }
        }
      }
    }

    $composerAutoloadFile = join (DS, [__vendor__, 'autoload.php']);

    return !is_file ($composerAutoloadFile) ? AppBootstrappers : (
      array_merge (AppBootstrappers, [ $composerAutoloadFile ])
    );
  }
}
