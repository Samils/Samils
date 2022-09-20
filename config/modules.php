<?php
# PHP Module Configurations
# Edit This file to extend
# the php module library
# functionalities and have
# different parsers on it
$module->exports = array (
	# Configuring the parser for
	# .env file by php module
	'module:parse .env' => function ($file) {
		# Import The DotEnv Library
		# Used to parse any '.env'
		# file content and return
		# an array containg each variable
		# with its value, and also provide
		# additional features for using them
		# with some more flexibility that before
		# it would.
		$dotEnv = requires ('dotenv');
		# make sure the 'dotenv' module
		# exists inside the project in
		# order avoiding errors when trying
		# to use it.
		# Being that truth, make use of the
		# module and return the parsed data
		# as an array or the returned content
		# by 'dotenv' module.
		if ($dotEnv) {
			# Parse the file in absolute path
			# stored in the '$file' variable,
			# and return the result of the
			# parsing action.
			return $dotEnv->parseFile (
				# Absolute path to the
				# .env file to parse.
				$file
			);
		}
	},
	# Configuring the parser for
	# .json files by php module.
	# When importing a json by the
	# requires function inside the php
	# namespace, it'll firstly get the
	# given file content and then parse that
	# from json string to php array in order
	# having it as a static and annonimous
	# array inside the application scope.
	'module:parse .json' => function ($file) {
		# Make sure the 'Saml' class is
		# already declared before trying
		# to get the given file content by
		# the same, in order avoiding errors
		# when trying to use the reference for
		# Saml class.
		# Stop executing the function if
		# there is not any reference for
		# the global Saml class wich should
		# be used inside the current Closure.
		if (!class_exists ('Saml'))
			# Stop the Closue flux, assuming
			# that the Saml class was not previously
			# declared inside the global scope.
			return;
		# Make sure the given file name reference
		# is a valid reference for a file containing
		# some information that should be used any how
		if (Saml::FileExists ($file)) {
			# Parse the file content from a
			# json string to an array and
			# return its content for the
			# caller
			return Saml::Object2Array (json_decode (
				# The given file content
				Saml::FileContent ($file)
			));
		}
	},
	# Configuring the parser for
	# .yaml and .yml file by php
	# module.
	# It'll use the yamlLite module to
	# do the parsing process.
	# Avoid using the module instance if
	# there's not a reference for the same
	# and it could not be got from any of
	# the declared paths for getting php
	# modules inside the project directory
	'module:parse .yaml .yml' => function ($file) {
		# Yaml Lite
		# Yaml Lite instance, that contains
		# the basis of a yamlLite object and
		# should now be used to treat yaml
		# files and datas according to the
		# library soluctions.
		$yamlLite = requires ('yaml-lite');
		# make sure the '$yamlLite'
		# variable has got an instance
		# of the yamlLite base class.
		# Avoid executing the next step
		# otherwise.
		if ($yamlLite) {
			# Parse the '$file' content
			# from the given absolue file
			# path.
			return $yamlLite->parse (
				# The given absolute file
				# path, wich contains a
				# reference for the file
				# inside the project directory
				$file
			);
		}
	},
	# Extensions
	# Module Extensions list's an array contaning
	# some of the file extensions supported by
	# the php-module library.
	# It includes a list of extension that should be
	# by default recognized when importing a file from
	# the php\requires function.
	# EG:
	# <?php
	# // Importing a php file called
	# // 'myFile' inside the same
	# // directory
	# $myFile = php\requires ('./myFile');
	# // It should be the same if '.php'
	# // was added at the end of the file
	# // name
	# $myFile = php\requires ('./myFile.php');
	#
	# Extensions are always in lowercase
	# because of the global convetions,
	# The file extension have to be writen
	# as they was registered inside the php
	# module configurations scope.
	'module:extensions' => array (
		'.php'
	),

	'module:extends' => array (
		'~/phpmodule'
	),
);
