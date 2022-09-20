<?php
/**
 * @version 2.0
 * @author Sammy
 *
 * @keywords Samils, ils, php framework
 * -----------------
 * @package Sami\Base
 * - Autoload, application dependencies
 *
 * MIT License
 *
 * Copyright (c) 2020 Ysare
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * --
 *
 * Sami Base Schema definition
 * This is an auto generated file that
 * should not be modified manually by
 * your self; it you really think is
 * necessary to have a different structure
 * for you database just create or edit a
 * migration in 'db/migrations' directory.
 *
 * This file is not a way for creating or
 * adding new tables in the database, it's
 * just a map of the database structure that
 * helps 'sami-base' filling up each of the
 * application models structure.
 */
namespace Sami\Base {
  /**
   * Define the database schema structure
   * according to whole created migrations
   *
   * THIS FILE WAS CHANGED LAST TIME AT '20211108114235'
   */
  Schema::Define (['version' => 20211108114235], function () {
    create_table ('schemamigration', function ($t) {
			$t->tinytext ('migration_timestamp');
			$t->tinytext ('migration_file_name');
			$t->varchar ('migration_last_modify');
			$t->varchar ('migration_table_name');
		});

		create_table ('sometablehere', function ($t) {
			$t->varchar ('name');
			$t->varchar ('email');
			$t->int ('age');
			$t->date ('birthday');
		});

		create_table ('user', function ($t) {
			$t->varchar ('name');
			$t->varchar ('surname');
			$t->varchar ('email');
			$t->date ('birthday');
			$phone = $t->varchar ('phone');
			$phone->comment = 'User phone number';
		});
  });
}
