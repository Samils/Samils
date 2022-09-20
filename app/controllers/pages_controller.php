<?php
/**
 * Page Controller
 * -
 * Controller that'll manage
 * the application basic requests
 */
class pagesController extends SamiController {

  function home ($req, $res) {}

  function testroute ($req, $res) {

    $users = User::all ();

    $this->testName = ENV::Get ('ILS_TEST_NAME');

    $this->someNames = ENV::Get ('SOME_TEXTS');

    #$loremIpsum = requires ('lorem-ipsum');

    #$res->end ($loremIpsum->generateWords (3));

    #$res->end (ENV::Get ('MY_DATAS'));

    #$article = new Article;

    #$format = requires ('format');

    #$res->end ($format->format ('Hello, {|color:blue}', 'Sam'));

    #$res->end (
    #  'END => ' . show_user_page_path (User::last(), $article#)
    #);

    $res->render ('pages/testroute', [
      'layout' => 'base',
      'data' => $users
    ]);
  }

  function mypage () {}

  function mytest () {
    $users = User::all ();

    $this->myUserName = 'Agostinho Lopes';

    return $users;
  }

  function userids ($req, $res) {
    $ids = User::Map (function ($user) {
      return $user->id;
    });

    return $res->end ($ids);
  }

  function tasks ($req, $res) {
    $tasks = Task::Read ([
      'id',
      'title',
      'description',

      'user' => [
        'name'
      ]
    ]);

    return $tasks;
  }

  function index ($req, $res) {
    $users = User::all();

    $this->myFullName = 'Agostinho Sambo Lopes';
    $this->dataRef = ['hello' => 'world'];

    $this->names = $users;

    return $users;
  }

  function senddata () {
    $user = params['user'];

    return $user;
  }

  function create_user ($req, $res) {
    $user = new User ( params['user'] );

    if ( $user->save() ) {
      $res->status(201);
      return $user;
    } else {
      $res->status (500);
      $res->end('<br />Fail while creating user');
    }
  }

  function credentials ($req, $res) {
    $res->end(conf);
  }

  function get_user ($req, $res) {
    $this->user = User::find ( params[ 'id' ] );

    if ( !$this->user ) {
      $res->status (404)
          ->end (['error' => 'use not found']);
    }

    return $this->user;
  }

  function get_user_key ($req, $res) {
    $key = params['user_key'];

    $user = User::findByKey ($key);

    if ($user) {
      $res->end ($user);
    }

    $res->status (404)
        ->end (['error' => 'user not found']);
  }

  function get_user_name_and_email () {
    $users = User::ReadNameAndEmail();

    return $users;
  }

  function get_user_name_and_email_key () {
    $key = params ['key'];

    $users = User::ReadNameAndEmail([
      'where()' => ['key' => $key]
    ]);

    return $users;
  }

  function read () {
    $users = User::ReadNameAndEmail([
      'limit()' => ['key' => params ['key']]
    ]);

    return $users;
  }

  function delete_user ($req, $res) {
    $user = User::find ( params['id'] );

    #User::search ('name: Agostinho Saml');

    if ( $user ) {
      $user->auto_destroy();

      $res->end (['user_deleted' => true]);
    }

    $res->status (404);
    $res->end (['error' => 'User not found']);
  }

  function update_user ($req, $res) {
    $newUserDatas = params['user'];

    $user = User::find (params['id']);

    if ( $user ) {
      $user->update_attributes ($newUserDatas);

      $res->end ( $user );
    }

    $res->status (404);
    $res->end (['error' => 'User not found']);
  }
}
