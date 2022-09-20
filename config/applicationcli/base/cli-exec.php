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
  use Configure;
  use Saml;
  use Sami;

  function file_exec ($file, $args) {
    return include $file;
  }

  function Execute ($args = null) {
    if (!is_array ($args)) {
      $args = Args ($_SERVER);
    }

    $yaml = requires ('yaml-lite');
    $cliConf = $yaml->parse_yaml_file ('../config');

    $script_file = __bin__ . ( '/' .
      (isset($args[0]) ? $args[0] : '')
    );

    if (!is_file ($script_file)) {
      $script_file .= '.php';
    }

    if (is_file ($script_file)) {
      $agruments = trim (join ($args, ' ' ));
      $agruments = preg_replace('/^([^\s]*)/', '',
        $agruments
      );

      return file_exec ($script_file, preg_split (
        '/\s+/', trim ( $agruments )
      ));
    }

    $definedApplicationCli = ( boolean ) (
      is_array ($cliConf) &&
      isset ($cliConf ['application-cli'])
    );

    if ( $definedApplicationCli ) {
      $cli = requires ($cliConf ['application-cli'], $cliConf);

      if (is_object($cli) && method_exists ($cli, 'execute')) {
        return call_user_func_array ([$cli, 'execute'], $args);
      } elseif (is_func ($cli)) {
        return call_user_func_array ($cli, $args);
      }
    }

    exit('Error... in: ' . __FILE__);
  }
}
