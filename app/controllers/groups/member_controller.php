<?php

namespace Groups {
	use SamiController;
	use User;

	class MemberController extends SamiController {
		/**
		 * @method index
		 * - Index Page
		 */
		function index ($req, $res) {
			$res->end('Hey');
		}
	}
}
