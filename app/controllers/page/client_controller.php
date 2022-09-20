<?php
namespace page;
/**
 * Include the SamiController class in the context
 */
use \SamiController;

class clientController extends SamiController {
	function new_ ($req, $res) {
		$res->end ('Hello, World..!');
	}
}
