<?php
class postController extends SamiController {

	function index () {
    $this->posts = Post::all();
	}


  function new_ () {}

  function create ($req, $res) {
    $post = new Post (params['post']);

    if ($post->save) {
      $res->end ($post);
    } else {
      $res->end ('Post Not Saved');
    }
  }
}
