<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 *
 * - FILE -
 *
 * Application Base Configuration file
 * - This is the main configuration file used
 * - by ils to manage and boostrap the current
 * - application, in order it getting the basic
 * - informations about what's inside the application
 * - and where to find each application features if there's
 * - a different location than what's defined as or
 * - should be the default location for the same [feature]
 */
$module->exports = [
 	/**
 	 * @var ApplicationRootFolder
 	 * - Application root directory
 	 */
 	'ApplicationRoot' => __DIR__,
 	'ApplicationFolder' => (__DIR__ . '/app'),
 	#'Application Public Folder' => (dirname(__FILE__) . '/public'),
 	'ApplicationIndexFile' => (__DIR__ . '/app.php'),
 	# Application Base
 	'ApplicationModule' => 'App',
 	#'Application Module Names Base' => 'mdl_',
 	#'Application Router' => '@root',
 	#'Application Virtual Router Enabled' => true,
 	#'Application Environment Configurations Enabled' => false,
 	#'Application Environment Configurations File' => null,
  'ApplicationAssetsPath' => (
    # Default path for having assess to the
    # application assets, as stylesheets, scripts and images
    # from the url
    '/application/public/assets'
  ),
  'ApplicationAssetsRealPath' => (
    # Default path for having assess to the
    # application assets, as stylesheets, scripts and images
    # from the url
    join (DIRECTORY_SEPARATOR, [__DIR__, 'app', 'assets'])
  ),
 	#'Application Logger Enabled' => true,
 	# The max time for keeping the logs
 	# inside the log directory
 	# d -> days
 	# w -> weeks
 	# m -> months
 	# y -> years
 	#'Application Logger Life Time' => '3d',
 	#'Application Logger For' => [ '@All' ],
 	#
  'ApplicationMetaDatas' => array (
    [
      'name' => 'author',
      'content' => 'Samils'
    ],
    [
      'name' => 'description',
      'content' => 'Whatever We Ame...'
    ],
    [
      'name' => 'keywords',
      'content' => [
        'Sammy',
        'Games',
        'Application',
        'Samils Application'
      ]
    ]
  ),

  'git.url' => 'htts://github.com',
  'git.username' => 'samils',

 	#'Application Test Driver' => '@hope',
 	#'Application Test Driver Options' => array (
 	#	'name' => 'hope',
 	#	'directory' => '<testDir>'
 	#),

 	#'Application Browser' => 'firefox',
 	#'Application Browser Abs Path' => (
 	#	'C:\Program Files\Mozilla Firefox'
 	#),

 	'ApplicationServerConfigFile' => join ('/', [
    __DIR__, '/config/application-server.yaml'
  ]),

 	'modules.phpModulePaths' => array (
 		'/^((root|)Dir)$/i' => ':root_dir',
    '/^((app|)Dir)$/i' => __DIR__ . '/app',
    '/^((config|)Dir)$/i' => ':config_dir',
    '/^((module(Root)?|)Dir)$/i' => ':module_root_dir'
 	),

  'cli' => array (
    'src' => __DIR__
  ),

 	## Application paths
 	# , used to create short reference
 	# to some specific application diretory
 	# inside the project root directory.
 	# There are modules that supports them,
 	# they usually tell that in their docs
 	# or may be, that comes with a (.*)Path function
 	# to load the ils paths inside it.
 	# See more about paths in the ils documentation
 	#'Application Paths' => array (
 	#	'@root' => __DIR__
 	#),

 	/**
 	 * @var Environment
 	 * - ils Application Environment
 	 * - Environment is defined to provide a differente
 	 * - build for each request to the current application
 	 * - it may be changed manually editing the 'ils-environment.php'
 	 * - file inside of the config directory.
 	 * - Or automatically adding an environment variable inside the
 	 * - system where running ils application, the environment variable
 	 * - musts to refer to the current application. For Ex:
 	 * ---- For a ils application called 'Store' is created an environment
 	 * ---- variable called 'ILS_ENV' inside a Store {defitinition}
 	 */
 	'Environment' => 'development',

 	'modules' => array (
    'rootDir' => __DIR__,
    'publicDir' => '<rootDir>/public',
    'appDir' => '<rootDir>/app',
 		'php-modules-directories' => array (
 			'<rootDir>/vendor/php_modules'
 		)
 	)
];
