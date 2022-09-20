<?php
/**
 * Page Controller
 * -
 * Controller that'll manage
 * the application basic requests
 */
class pageController extends SamiController {

    function app ($req, $res, $post) {
        $res->end ($post);
    }

    function about () {}

    function createApp () {}

    function download_app ($req, $res) {
        $res->end ('<h1>Downloading...</h1>');
    }

    function test ($req, $res, $user) {
        $res->end ($user);
    }

    function test2 ($req, $res) {
        $res->end (0);
    }

    function index ($req, $res) {
        $this->posts = Post::all();
    }

    function home ($req, $res) {

        #$lorem = requires ('lorem-ipsum');

        #Post::create ([
        #   'title' => $lorem->generate(rand (5, 30)),
        #   'body' => $lorem->generate (rand(20, 40))
        #]);

        #$phenc = requires ('@php/enc');

        #$hash = $phenc->encrypt (
        #   ['message' => 'Hello, World..!']
        #);

        #$res->end (view_art_path(12, 'helloWorld', 'Sammy'));

        #$posts = Post::mapEach (3, function () {
        #    return func_get_args();
        #});

        #$p = all_posts();

        $res->end ('Hello, World..!');
    }

    function create_post ($req, $res) {
        $lorem = requires ('lorem-ipsum');

        #$post = Post::create ([
        #   'title' => $lorem->generate(rand (5, 30)),
        #   'body' => $lorem->generate (rand(20, 40))
        #]);

        $post = new Post;

        $post->title = $lorem->generate(rand (5, 30));
        $post->body = $lorem->generate(rand(20, 40));

        if ( $post->save ) {
            $res->end ($post);
        }
    }

    function delete_post ($req, $res) {
        $post = Post::find ();

        $post->auto_destroy();

        $res->end ($post);
    }

    function find_post ($req, $res) {
        # find the post having the sent id
        $post = Post::find ( params['id'] );

        $res->end ($post);
    }

    function update_post ($req, $res) {
        $post = Post::find ();

        $post->update_attributes ([
            'title' => 'Sami is a great one'
        ]);

        $res->end ($post);
    }

}
