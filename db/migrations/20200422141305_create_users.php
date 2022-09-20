<?php
/**
 * -----------------
 * @package Sami\Base
 * - Draw data base table structure
 * - accordig to what is defined inside
 * - the migration (change or up) method
 */
namespace Sami\Base {
	/**
	 * @Migration 'create_users'
	 * Draw Base
	 */
	class create_users extends Migration {
		function change () {
			create_table ('users', function ($t){
				$t->string ('name');
				$t->string ('surName');
				$t->string ('email');
        $t->string ('phone');
				$t->date ('birthday');
			});
		}
	}
}
