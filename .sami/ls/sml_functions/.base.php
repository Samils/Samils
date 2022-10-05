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
  function dir_boot ($dir = null, array $options = []) {
    if (!(is_string ($dir) && !empty ($dir))) {
      $dir = __ils__;
    }

    /**
     * @var skipDirList
     * - Special Directories
     * - An array containg directory names that're not
     * - included by the 'dir_boot' function and must
     * - to be bootstrapped manually if it's necessary
     */
    $skipDirList = [
      __appdir__,
      __db__,
      __views__,
      __setups__,
      __config__
    ];
    /**
     * @var spc_file
     * - Special Files
     * - An array containg file names that're not
     * - included by the 'dir_boot' function and must
     * - to be included manually if it's necessary
     */
    $spc_file = [ '.base.php' ];
    $phpFileExtensions = [ 'php' ];

    # Get the trace file name to
    # use the ref directory as the
    # root in case of ralative paths
    # used in the dir variable
    if (preg_match ('/^(\.+\/)/', $dir)) {
      $backTarce = debug_backtrace ();
      $trace = isset ($backTarce [0]) ? $backTarce [0] : null;

      if (is_array ($trace) && isset ($trace ['file'])) {
        $dir = join (DIRECTORY_SEPARATOR, [dirname ($trace ['file']), $dir]);
      }
    }
    /**
     * remove and correspondence for a bar
     * found at the end of '$dir' str in order
     * avoiding to have to directory separators
     * in the string
     */
    $dir = preg_replace ('/(\/|\\\)+$/', '', $dir);

    $options = array_merge (['force' => !1], $options);
    /**
     * Create a pattern to match the files inside the
     * current directory and find each file or firectory
     * inside it in order booting it
     */

    if (in_array (realpath ($dir), $skipDirList) && !$options ['force']) {
      return [];
    }
    /**
     * List each file in the directory inside the
     * '$dirFileList' variable and then, run around
     * it and including each php file or booting
     * each sub directory inside it in order completing
     * the boot process
     */
    $dirFileList = glob (join (DIRECTORY_SEPARATOR, [$dir, '*']));

    if (!!(is_array ($dirFileList) && $dirFileList)) {
      foreach ($dirFileList as $i => $file) {
        $fileName = pathinfo ($file, PATHINFO_FILENAME);

        if (is_dir ($file) && !in_array (realpath ($file), $skipDirList)) {
          dir_boot ($file);
        } elseif (is_file ($file) && !in_array ($fileName, $spc_file)) {
          $fileExtension = strtolower (pathinfo ($file, PATHINFO_EXTENSION));
          if (in_array ($fileExtension, $phpFileExtensions)) {
            include_once $file;
          }
        }
      }
    }

    return AppBootstrappers;
  }
}
