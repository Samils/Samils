<?php

namespace App\Middleware;

class Auth extends ApplicationMiddleware {
  function root ($req, $res) {
    return [];
  }

  /**
   * some implementation for json web tokens
   */
  function jwt () {
    return [];
  }
}
