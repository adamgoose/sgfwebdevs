<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model {

  /**
   * @var array
   */
  protected $fillable = [
    'title',
    'content',
  ];

  /**
   * Automatically generate post slug on save.
   */
  protected static function boot()
  {
    parent::boot();

    static::saving(function($post)
    {
      $post->slug = Str::slug($post->title);
    });
  }
}
