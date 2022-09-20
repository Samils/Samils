<?php

class User extends Sami\Base {
	function constructor () {
		validate_presence_of ('name', 'email', 'username');
		validate_uniqueness_of ('email');
	}
}
