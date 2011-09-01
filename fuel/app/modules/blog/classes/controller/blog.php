<?php
namespace Blog;

class Controller_Blog extends Controller_Base {

	// -----------------------------------------------------------
	//  Actions
	// -----------------------------------------------------------

	/**
	 * List blog posts, with pagination
	 */
	public function action_index($offset = 0)
	{
		\Pagination::set_config(array(
			'pagination_url' => \URI::create('blog/index'),
			'total_items'    => Model_Post::count(),
			'per_page'       => \Config::get('blog.pagination.per_page', 6),
			'uri_segment'    => 3,
		));

		$posts = Model_Post::get_with_pagination();
		$data = array('posts' => $posts, 'pagination' => \Pagination::create_links());

		$this->template->content = \View::factory('blog/index', $data, false);
	}

	/**
	 *
	 */
	public function action_tag($tag, $offset = 0)
	{
		$tag = urldecode($tag);
		
		\Pagination::set_config(array(
			'pagination_url' => \URI::create('blog/tag/'.urlencode($tag)),
			'total_items'    => Model_Tag::count($tag),
			'per_page'       => \Config::get('blog.pagination.per_page', 6),
			'uri_segment'    => 4,
		));
		
		$posts = Model_Post::get_by_tag_with_pagination($tag);
		$data = array('posts' => $posts, 'pagination' => \Pagination::create_links(), 'tag' => $tag);
		
		$this->template->content = \View::factory('blog/index', $data, false);
	}

	/**
	 * View a single blog post
	 *
	 * @param integer|string id or slug of blog post
	 */
	public function action_view($id = null)
	{
		$id and $post = Model_Post::get_by_id_or_slug($id);

		if ( ! $post)
		{
			\Request::show_404();
		}

		$this->template->content = \View::factory('blog/view', array('post' => $post));
	}


	// -----------------------------------------------------------
	//  Widgets
	// -----------------------------------------------------------

	public function action_widget_latest_posts($amount = 6)
	{
		$posts = Model_Post::get()->where('status', Model_Post::PUBLISHED)->limit($amount)->execute()->as_array();

		$this->response->body = \View::factory('blog/widgets/latest_posts', array('posts' => $posts));
	}
	
	public function action_widget_tags()
	{
		$tags = Model_Tag::list_distinct();
		
		$this->response->body = \View::factory('blog/widgets/tags', array('tags' => $tags));
	}
}

/* End of file: classes/controller/blog.php */