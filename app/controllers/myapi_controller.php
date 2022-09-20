<?php
/**
 * MyapiController * -
 * Controller that'll manage
 * the application basic requests
 */
class MyapiController extends SamiController {

  /**
   * @method void index
   */
  function index ($req, $res) {}

  static function getStaticPaths () {
    $userPaths = User::map (function ($user) {
      return get_user_page_path ($user->id);
    });


    return $userPaths;
  }

}
