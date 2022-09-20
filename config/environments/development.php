<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Samils\Application\Configures
 * - Autoload, application dependencies
 */
namespace Samils\Application\Configures {
	def('module.secreal.app.relativePathDecode', true);
  def('module.absolutePathPatternAccessibility', true);

  def('module.app.name', 'Sammy App Name');
  def('module.app.title', 'Home Page');


  def('module_cache_object', false);
	def('stylesheet_cache', false);
	def('end_js_minify', false);

	# Database connection datas
	# A bool value indicating if the
	# database connection datas taken
	# by the database.* file will or
	# not be cached for future requests.
	# It is 'false' by default because of
	# the tests being done in the development
	# environment, in order knowing if the
	# connection alternates work correctly
	# before creating the final application
	# build.
	def('database_connection_datas_cache', true);

	def ('php_module_import_cache', false);
}
