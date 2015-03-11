<?php namespace App;

use App\Traits\Linkable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model {

  use Linkable;

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

  /**
   * @return string
   */
  public function getTeaserAttribute()
  {
    return Str::words($this->content, 20);
  }
}
