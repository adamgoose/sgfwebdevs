<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostsController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $posts = Post::all();

    return view('admin.posts.index', compact('posts'));
  }

  /**
   * Display the specified resource.
   *
   * @param Post $post
   *
   * @return Response
   *
   */
  public function show(Post $post)
  {
    return view('admin.posts.show', compact('post'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function update($id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int $id
   *
   * @return Response
   */
  public function destroy(Post $post)
  {
    $post->delete();

    return 'deleted';
  }
}
