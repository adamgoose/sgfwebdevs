<?php namespace App\Http\Controllers;

use App\Post;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

  /**
   * Show the application welcome screen to the user.
   *
   * @param Post $post
   *
   * @return Response
   */
	public function index(Post $post)
	{
    $posts = $post->orderBy('created_at', 'desc')->paginate(3);

		return view('index', compact('posts'));
	}

}
