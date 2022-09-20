<?php

namespace Sami\Helper {
	use Post;

	class PostHelper extends ApplicationHelper {
		function all_posts () {
			$posts = Post::all ();

			return $posts;
		}

		function post_titles () {
			$titles = Post::map (function ($post) {
				return $post->title;
			});

			return $titles;
		}
	}
}